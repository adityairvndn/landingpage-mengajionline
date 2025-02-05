<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject; // Import JWTSubject

class User extends Authenticatable implements JWTSubject
{
    use HasFactory;

    // Implementasikan metode yang diwajibkan oleh JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Mengembalikan ID user (biasanya primary key)
    }

    public function getJWTCustomClaims()
    {
        return []; // Kamu bisa menambahkan klaim kustom jika diperlukan
    }
}
