<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Folder;
use App\Models\Campaign;
use App\Models\Review;

class Site extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function folders()
    {
        return $this->hasMany(Folder::class);
    }
    // public function reviews()
    // {
    //     return $this->hasManyThrough(Review::class, Campaign::class);
    // }
    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
