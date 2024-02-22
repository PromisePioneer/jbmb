<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kondisi extends Model
{
    use HasFactory;
    protected $table = 'table_kondisi';
    protected $fillable = [
        'name'
    ];

    /**
     * Get the motor that owns the Kondisi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function motor(): HasOne
    {
        return $this->hasOne(Motor::class, 'kondisi_id');
    }
}
