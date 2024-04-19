<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;

class Platform extends Model
{
    use HasFactory;

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }
}
