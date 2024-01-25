<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;
use App\Models\Site;

class Folder extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
