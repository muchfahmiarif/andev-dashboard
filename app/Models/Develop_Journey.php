<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Develop_Journey extends Model
{
    use HasFactory;
    protected $table = 'develop_journey';
    protected $primaryKey = 'id_devlop';
    public $timestamps = true;
    protected $fillable = [
        'id_devlop',
        'jenis_journey',
        'user_id',
        'nama_item',
        'zat_aktif',
    ];
}
