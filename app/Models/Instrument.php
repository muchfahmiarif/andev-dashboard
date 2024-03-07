<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;

    protected $table = 'instrument';
    protected $primaryKey = 'id_instrument';
    public $timestamps = true;
    protected $fillable = [
        'id_instrument',
        'user_id',
        'alat_instrument',
        'no_asset',
        'kalibrasi1',
        'performa1',
        'kalibrasi2',
        'performa2',
        'kalibrasi3',
        'performa3',
        'kalibrasi4',
        'performa4',
        'kalibrasi5',
        'performa5',
        'kalibrasi6',
        'perform6',
        'kalibrasi7',
        'performa7',
        'kalibrasi8',
        'performa8',
        'kalibrasi9',
        'performa9',
        'kalibrasi10',
        'performa10',
        'kalibrasi11',
        'performa11',
        'kalibrasi12',
        'performa12',
        'keterangan',
    ];
}
