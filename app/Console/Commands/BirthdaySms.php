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
        $todays_bithday = Baptism::select('newborn_firstname','newborn_middlename','newborn_surname','contact_number','gfather_contact_no','gmother_contact_no','baptism_church')
                                    ->where('birth_date', 'like', '%' .Carbon::now()->format('m-d') . '%')
                                    ->get()->toArray();

        foreach ($todays_bithday as $value){
            $fullname =  $value['newborn_firstname'].' '.$value['newborn_middlename'].' '.$value['newborn_surname'];

            if($value['gender' == 'male']){
                $gender = 'him';
            }elseif($value['gender' == 'female']){
                $gender = 'her';
            }

            $self_contact_number =  $value['contact_number'];
            $gfather_contact_no =  $value['gfather_contact_no'];
            $gmother_contact_no =  $value['gmother_contact_no'];

            $self_msg = 'Hello'.' '.$fullname.' '.'Have a wonderful birthday. We wish your every day to be filled with lots of love, laughter and happiness.';
            $god_parents_msg = 'Its your Godchild birthday today.Bless'.$gender.'with good wishes.';

        }

    }

 /* public function handle()
    {
        // Your PHP installation needs cUrl support, which not all PHP installations
        // include by default.
        // To run under docker:
        // docker run -v $PWD:/code php:7.3.2-alpine php /code/code_sample.php

        $username = 'franklinfargoj';
        $password = 'franklinfargoj123';
        $messages = array(
           // array('to'=>'+919561459348', 'body'=>'Hello Airtel!'),
            array('to'=>'919561459348', 'body'=>'Hello Franklin')
        );

        $result = $this->send_message( json_encode($messages), 'https://api.bulksms.com/v1/messages', $username, $password );

        if ($result['http_status'] != 201) {
            print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
        } else {
            print "Response " . $result['server_response'];
            // Use json_decode($result['server_response']) to work with the response further
        }
    }

    function send_message ( $post_body, $url, $username, $password) {
        $ch = curl_init( );
        $headers = array(
            'Content-Type:application/json',
            'Authorization:Basic '. base64_encode("$username:$password")
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_body );
        // Allow cUrl functions 20 seconds to execute
        curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
        // Wait 10 seconds while trying to connect
        curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
        $output = array();
        $output['server_response'] = curl_exec( $ch );
        $curl_info = curl_getinfo( $ch );
        $output['http_status'] = $curl_info[ 'http_code' ];
        $output['error'] = curl_error($ch);
        curl_close( $ch );
        return $output;
    }*/
}
