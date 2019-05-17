<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    public $timestamps = true;
    protected $fillable = [
        'name_1',
        'name_2',
        'name_3',
        'name_4',
        'number_1',
        'number_2',
        'number_3',
        'number_4',
        'address',
        'googlemap',
        'email'
    ];
}
