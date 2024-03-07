<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compliance extends Model
{
    use HasFactory;

    protected $table = 'compliance';
    protected $primaryKey = 'id_compliance';
    public $timestamps = true;
    protected $fillable = [
        'id_compliance',
        'user_id',
        'area',
        'pic',
        'nama_alat',
        'list_item_check',
        'status1',
        'status2',
        'status3',
        'status4',
        'status5',
        'status6',
        'status7',
        'status8',
        'status9',
        'status10',
        'status11',
        'status12',
        'keterangan',
    ];
}
