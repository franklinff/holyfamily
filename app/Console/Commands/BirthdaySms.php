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
}
