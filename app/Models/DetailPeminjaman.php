<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'detail_peminjaman';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_peminjaman',
        'id_anggota',
        'id_petugas',
        'id_buku',
        'id_pengembalian'
    ];

    function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }

    function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    function pengembalian()
    {
        return $this->belongsTo(Pengembalian::class, 'id_pengembalian');
    }

    function anggota()
    {
        return $this->belongsTo(User::class, 'id_anggota');
    }

    function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
