<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;
    protected $table = 'table_status';
    protected $fillable = [
        'status'
    ];

    /**
     * Get the motor that owns the Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function motor(): BelongsTo
    {
        return $this->belongsTo(Motor::class, 'status_id');
    }
}
