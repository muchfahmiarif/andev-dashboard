<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Develop_Detail extends Model
{
    use HasFactory;

    protected $table = 'develop_document';
    protected $primaryKey = 'id_dev_doc';
    public $timestamps = true;
    protected $fillable = [
        'id_dev_doc',
        'user_id',
        'jenis_journey',
        'judul',
        'deskripsi',
        'nama_item',
        'zat_aktif',
        'time_line',
        'nama_document',
        'status',
        'keterangan',
        'file',
    ];

}
