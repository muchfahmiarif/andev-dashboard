<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Develop_Timeline extends Model
{
    use HasFactory;protected $table = 'develop_tl';
    protected $primaryKey = 'id_dev_tl';
    public $timestamps = true;
    protected $fillable = [
        'id_dev_tl',
        'user_id',
        'jenis_journey',
        'nama_item',
        'zat_aktif',
        'time_line',
        'body',
        'status',
    ];
}
