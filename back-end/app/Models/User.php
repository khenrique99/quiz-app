<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
      'name',
      'email',
      'password',
      'date_birth',
    ];

    protected $hidden = [
      'password',
      'remember_token',
    ];

    protected $casts = [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];

    public function getJWTIdentifier()
    {
      return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
      return [];
    }

    public function userTre()
    {
      return $this->from('users')
        ->where('access', 3)
        ->get();
    }
}
