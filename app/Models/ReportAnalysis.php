<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAnalysis extends Model
{
    use HasFactory;

    protected $table = 'report_analysis';
    protected $primaryKey = 'id_report';
    public $timestamps = true;
    protected $fillable = [
        'id_report',
        'user_id',
        'jenis_report',
        'no_permintaan_analisa',
        'no_laporan_analisa',
        'nama_item',
        'category',
        'pic',
        'kode_racikan',
        'supplier',
        'no_bets',
        'bulan',
        'parameter',
        'storage',
        'tgl_masuk',
        'tgl_analisa', 
        'tgl_est', 
        'tgl_selesai', 
        'ot_analysis', 
        'nama_analis', 
        'file_upload', 
        'status', 
        'keterangan', 
        'tgl_selesai_report', 
        'status_lt', 
    ];

    
}
