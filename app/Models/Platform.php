<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;
use App\Models\Campaign;
use App\Models\Scopes\DataAccessScope;
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
    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DataAccessScope);

        static::deleting(function ($platform) {
            // Delete the associated messages
            $platform->campaigns()->delete();
        });
    }
}
