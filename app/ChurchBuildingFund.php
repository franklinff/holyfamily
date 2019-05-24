<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChurchBuildingFund extends Model
{
    use SoftDeletes;
    protected $table = 'church_building_fund';
    protected $fillable = [
        'donor_name',
        'pannumber',
        'donation_amount',
        'donor_address',
        'donation_date',
        'payment_mode',
        'bank_name',
        'bank_branch',
        'bn_account_no',
        'cheque_number',
        'cq_issue_date',
        'receivername',
        'receivername',
        'created_at'
    ];

}
