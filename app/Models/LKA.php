<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LKA extends Model
{
    use HasFactory;

    protected $table = 'lka';
    protected $primaryKey = 'id_lka';
    public $timestamps = true;
    protected $fillable = [
        'id_lka',
        'user_id',
        'jenis_lka',
        'nama_item',
        'no_lka',
        'tahun_terbit',
        'file_upload',
        'keterangan',
    ];
}
