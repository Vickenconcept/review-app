<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Platform extends Model
{
    use HasFactory;

    public $guarded = [];

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
}
