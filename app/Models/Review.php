<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;
use App\Models\Scopes\DataAccessScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Review extends Model
{
    use HasFactory;
    protected $guarded= [];

    protected $casts = [
        'contact_info_ans' => 'array',
        'private_feed_back_ans' => 'array',
        'image_size' => 'array',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DataAccessScope);

    }
}
