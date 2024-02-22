<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jenis extends Model
{
    use HasFactory;
    protected $table = 'table_jenis';
    protected $fillable = [
        'name'
    ];

    /**
     * Get the motor that owns the Jenis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function motor(): BelongsTo
    {
        return $this->belongsTo(Motor::class, 'jenis_id');
    }
}
