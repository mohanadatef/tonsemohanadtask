<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'send_user_id',
        'reserve_user_id',
        'message',
    ];
    
    protected $table='messages';

}
