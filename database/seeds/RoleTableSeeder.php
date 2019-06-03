<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if(DB::table('roles')->get()->count() == 0){

            DB::table('roles')->insert([
                [
                    'name' => 'Parish Priest',
                    'guard_name' => 'Priest'
                ],
                [
                    'name' => 'Church Employee',
                    'guard_name' => 'Employee'
                ],
                [
                    'name' => 'Parish council',
                    'guard_name' => 'Service to church'
                ]

            ]);

        } else { echo "\e[Toles is not empty, therefore NOT "; }

    }
}
