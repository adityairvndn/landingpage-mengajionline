<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject; // Import JWTSubject

class Registrasi extends Model implements JWTSubject
{
    use HasFactory;

    protected $table = 'registrasi';

    protected $fillable = [
        'username',
        'email',
        'password',
        'no_hp',
        'alamat',
        'usia',
        'versi',
        'status_daftar',
        'foto_profil',
        'device_name',
        'os_version',
    ];

    protected $guarded = [];

    // Mengimplementasikan metode yang diwajibkan oleh JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Mengembalikan ID registrasi sebagai identifier
    }

    public function getJWTCustomClaims()
    {
        return []; // Kamu bisa menambahkan klaim kustom jika diperlukan
    }

    // Fungsi untuk mengenkripsi password sebelum disimpan ke database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Fungsi untuk memastikan email disimpan dalam huruf kecil
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
