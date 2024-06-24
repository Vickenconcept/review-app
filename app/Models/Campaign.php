<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;
use App\Models\Site;
use App\Models\Widget;
use App\Models\Platform;
use App\Models\Scopes\DataAccessScope;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

// use App\Models\Trait\CampaignSluggable;



class Campaign extends Model
{
    use HasFactory;

    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $guarded= [];
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function widget()
    {
        return $this->belongsTo(Widget::class)->withDefault(['name' => 'Default Widget']);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DataAccessScope);

        static::deleting(function ($campaign) {
            $campaign->reviews()->delete();
        });
    }
}
