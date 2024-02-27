<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Motor extends Model
{
    use HasFactory;
    protected $table = 'table_motor';
    protected $fillable = [
        'name',
        'merkMotor',
        'transmisi',
        'tahun',
        'masaPajak',
        'kilometer',
        'deskripsi',
        'kondisi_id',
        'harga',
        'jenis_id',
        'foto',
        'status'
    ];

    /**
     * Get the user that owns the Motor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get the kondisi that owns the Motor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kondisi(): BelongsTo
    {
        return $this->belongsTo(Kondisi::class);
    }

    /**
     * Get the jenis associated with the Motor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis(): BelongsTo
    {
        return $this->belongsTo(Jenis::class);
    }

    function tawaran()
    {
        return $this->belongsTo(Tawaran::class, 'motor_id');
    }
}
