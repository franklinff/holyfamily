<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baptism extends Model
{
    protected $table = 'baptism_details';

    protected $fillable = [ 'gender',
                            'adopted',
                            'birth_date',
                            'baptism_date',
                            'birthplace',
                            'newborn_firstname',
                            'newborn_middlename',
                            'newborn_surname',
                            'father_first_name',
                            'father_middle_name',
                            'father_last_name',
                            'mother_first_name',
                            'mother_middle_name',
                            'mother_last_name',
                            'guardian_resident_adrs',
                            'contact_number',
                            'gmother_first_name',
                            'gmother_middle_name',
                            'gmother_last_name',
                            'gmother_adrs',
                            'gmother_contact_no',
                            'gfather_first_name',
                            'gfather_middle_name',
                            'gfather_last_name',
                            'gfather_adrs',
                            'gfather_contact_no',
                            'pastor',
                            'baptism_church',
                            'remark',
                            ];

    public $timestamps = false;

}


