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
        'user_id', 'transaction_id','transaction_amount','transaction_date',
    ];

    /**
     * Get the user that owns debts
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
