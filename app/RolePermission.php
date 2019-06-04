<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{

    protected $table = 'role_has_permissions';

    public function getPermissionname(){
        return $this->belongsTo('App\Permission', 'permission_id', 'id');
    }

}
