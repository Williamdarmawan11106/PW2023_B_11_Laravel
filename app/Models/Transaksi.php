<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'status',
        'metode',
        'id_anggota'
    ];

    public function anggota()
    {
        return $this->belongsTo(User::class, 'id_anggota');
    }
}
