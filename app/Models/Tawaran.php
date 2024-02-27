<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tawaran extends Model
{
    use HasFactory;
    protected $table = 'table_tawaran';
    protected $fillabe = [
        'motor_id',
        'user_id',
        'hargaTawar'
    ];

    function motor()
    {
        return $this->belongsTo(Motor::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
