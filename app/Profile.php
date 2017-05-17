<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The table associated with the profile model.
     *
     * @var string
     */
    protected $table = 'tbl_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'national_id','mobile_number','fully_cleared','date_cleared', 'batch_numbers','clearing_mpesa_trans_id',
    ];
}
