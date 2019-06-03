<?php

use Illuminate\Database\Seeder;
use App\Permission;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::get()->toArray();
        $i = 0;

        $priest = array();
        $employee = array();
        $parish_council = array();

        foreach ($permission as $value){

            if(strpos($value['name'], 'churchbuidingfund') !== false ||
                strpos($value['name'], 'baptism') !== false ||
                strpos($value['name'], 'contactus') !== false ||
                strpos($value['name'], 'carousngalry') !== false ||
                strpos($value['name'], 'create_gallery') !== false ||
                strpos($value['name'], 'list_gallery') !== false ||
                strpos($value['name'], 'ajxupdateStatus') !== false ||
                strpos($value['name'], 'deletecoroselimg') !== false ||
                strpos($value['name'], 'login') !== false ||
                strpos($value['name'], 'logout') !== false ||
                strpos($value['name'], 'register') !== false ||
                strpos($value['name'], 'password') !== false
            ){
                $priest[$i]['permission_id'] = $value['id'];
                $priest[$i]['role_id'] = 1;
            }

            if( strpos($value['name'], 'churchbuidingfund') !== false ||
                strpos($value['name'], 'carousngalry') !== false ||
                strpos($value['name'], 'create_gallery') !== false ||
                strpos($value['name'], 'list_gallery') !== false ||
                strpos($value['name'], 'ajxupdateStatus') !== false ||
                strpos($value['name'], 'deletecoroselimg') !== false ||
                strpos($value['name'], 'login') !== false ||
                strpos($value['name'], 'logout') !== false
            ){
                $employee[$i]['permission_id'] = $value['id'];
                $employee[$i]['role_id'] = 2;
            }
            if( strpos($value['name'], 'login') !== false ||
                strpos($value['name'], 'logout') !== false ||
                strpos($value['name'], 'churchbuidingfund') !== false
            ){
                $parish_council[$i]['permission_id'] = $value['id'];
                $parish_council[$i]['role_id'] = 3;
            }
            $i++;
        }

        DB::table('role_has_permissions')->insert($priest);
        DB::table('role_has_permissions')->insert($employee);
        DB::table('role_has_permissions')->insert($parish_council);
    }
}
