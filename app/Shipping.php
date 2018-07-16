<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
    ];

    /**
     * Shipping Has Many To Users
     *
     * @return mixed
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}