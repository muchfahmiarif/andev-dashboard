<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RPV_RIV extends Model
{
    use HasFactory;
    protected $table = 'rpv_riv';
    protected $primaryKey = 'id_kegiatan';
    public $timestamps = true;
    protected $fillable = [
        'id_kegiatan',
        'user_id',
        'jenis_kegiatan',
        'nama_item',
        'pic',
        'rencana',
        'aktual',
        'keterangan',
        'status',
        'verifikasi_1',
        'date_verifikasi_1',
        'verifikasi_2',
        'date_verifikasi_2',
    ];
}
