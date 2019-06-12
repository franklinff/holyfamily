<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Baptism;

class BirthdaySms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:sendsms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $todays_bithday = Baptism::select('newborn_firstname','newborn_middlename','newborn_surname','contact_number','gfather_contact_no','gmother_contact_no','baptism_church','gender')
                                    ->where('birth_date', 'like', '%' .Carbon::now()->format('m-d') . '%')
                                    ->get()->toArray();

        foreach ($todays_bithday as $value){

            $fullname =  $value['newborn_firstname'].' '.$value['newborn_middlename'].' '.$value['newborn_surname'];

            if($value['gender'] == 'male'){
                $gender = 'him';
            }elseif($value['gender'] == 'female'){
                $gender = 'her';
            }

            $self_msg = 'Hello'.' '.$fullname.' '.',have a wonderful birthday. We wish your every day to be filled with lots of love, laughter and happiness.';
            $god_father_msg = 'Its'.' '.$fullname.' '.'birthday.Give good wishes.';
            $god_mother_msg = 'Its'.' '.$fullname.' '.'birthday.Give greetings.';

            $self_contact_number =  $value['contact_number'];
            $gfather_contact_no =  $value['gfather_contact_no'];
            $gmother_contact_no =  $value['gmother_contact_no'];

            $this->send_message($self_contact_number,$self_msg);
            $this->send_message($gfather_contact_no,$god_father_msg);
            $this->send_message($gmother_contact_no,$god_mother_msg);
        }
    }


    //https://docs.msg91.com/
    function send_message ($phone_number,$message){

        //Your authentication key
        $authKey = "280644A5qrvU3Z5d009087";

        //Multiple mobiles numbers separated by comma
        $mobileNumber = $phone_number;

        //Sender ID,While using route4 sender id should be 6 characters long.
        //$senderId = "102234";
        $senderId = "HFCSMS";

        //Your message to send, Add URL encoding here.
        //$message = urlencode(".'$message'.");
        $message = urlencode($message);

        //Define route
        $route = 4;

        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

        //API URL
        $url="http://api.msg91.com/api/sendhttp.php";

        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));

        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        //get response
        $output = curl_exec($ch);

        //Print error if any
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);

        echo $output.PHP_EOL;

    }

}



