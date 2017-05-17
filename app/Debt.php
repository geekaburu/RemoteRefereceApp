<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    /**
     * The table associated with this model.
     *
     * @var string
     */
    protected $table = 'tbl_due_listing';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cust_name', 'cust_id','cust_acno','loan_amount','loan_balance','loan_issue_date','loan_due_date','cust_mobile_number',
    ];

}
