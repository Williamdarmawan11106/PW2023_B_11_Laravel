<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tgl_pinjam',
        'tgl_kembali',
    ];
}
