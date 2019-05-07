<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarouselnGallery extends Model
{
    use SoftDeletes;
    protected $table = 'carousngalry';
    protected $fillable = ['imagename','status','type','remark'];
    public $timestamps = false;
}
