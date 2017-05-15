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
    protected $table = 'tbl_profiles_1';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','name', 'email','national_id','mobile_number','city','country',
    ];

    /**
     * Get the user that owns profiles
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the debts for the user.
     */
    public function debts()
    {
        return $this->hasMany(Debt::class);
    }
}
