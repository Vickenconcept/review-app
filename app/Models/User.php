<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Site;
use App\Models\Reseller;
use App\Models\Platform;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    // use TwoFactorAuthenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'facebook_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function sites()
    {
        return $this->belongsToMany(Site::class);
    }

    public function resellers()
    {
        return $this->hasMany(Reseller::class);
    }
    public function platforms()
    {
        return $this->hasMany(Platform::class);
    }
  
}
