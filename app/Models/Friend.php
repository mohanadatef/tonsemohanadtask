<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'send_user_id',
        'reserve_user_id',
        'status',
    ];
    
    protected $table='friendships';
}
