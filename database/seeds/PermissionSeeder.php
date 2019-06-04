<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[];
        $routes =  Route::getRoutes()->get();

        foreach($routes as $route)
        {
            if(isset($route->action['as'])){
                $permissions[]=$route->action['as'];
            }
        }

       // dd($permissions);
        $i = 0;
        $input_permissions=array();
        foreach ($permissions as $permission){

            $flag=Permission::where('name',$permission)->exists();

            if(!$flag){
                $permission_route = explode('.', $permission);
                $common_display_name='';

                if(!empty($permission_route[1])){
                    $permConfig = config("commonConfig.routes.$permission_route[1]");

                    if(!empty($permConfig)){
                        $common_display_name=$permConfig['guard_name'];
                    }else{
                        $common_display_name=ucfirst($permission_route[1]);
                    }
                }
                $input_permissions[$i]['name'] = $permission;
                $input_permissions[$i]['guard_name'] = ucwords($common_display_name.' '. $permission_route[0]);
                $i++;
            }
        }

        // dd($input_permissions);
        if(!empty($input_permissions)){
            $permissions[] = Permission::insert($input_permissions);
        }

    }
}
