<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;

class Review extends Model
{
    use HasFactory;
    protected $guarded= [];

    protected $casts = [
        'contact_info_ans' => 'array',
        'private_feed_back_ans' => 'array',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
