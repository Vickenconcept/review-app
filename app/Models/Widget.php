<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;

class Widget extends Model
{
    use HasFactory;

    protected $guarded= [];


    public function campaign()
    {
        return $this->hasOne(Campaign::class);
    }
}
