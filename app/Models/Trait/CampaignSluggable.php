<?php

namespace App\Models\Trait;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

Trait CampaignSluggable {

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
}