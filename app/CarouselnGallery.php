<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselnGallery extends Model
{
   // use SoftDeletes;
    //use softDeletes;
    protected $table = 'carousngalry';

    protected $fillable = ['imagename','status','type','remark'];
    public $timestamps = false;
}
