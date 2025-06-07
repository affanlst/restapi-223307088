<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    // Nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'karyawan';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'handphone',
        'alamat',
    ];

    // Jika kolom primary key bukan 'id', bisa diatur di sini
    protected $primaryKey = 'id';

    // Jika tidak menggunakan timestamps (created_at, updated_at)
    public $timestamps = false;

    // Jika ingin mendefinisikan tipe data kolom
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'jenis_kelamin' => 'string',
        'handphone' => 'string',
        'alamat' => 'string',
    ];
}
