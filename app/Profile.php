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
        'name', 'email','national_id','mobile_number','city','country',
    ];

    /**
     * Get the user that owns profiles
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
