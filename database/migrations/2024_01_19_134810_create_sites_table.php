<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('url')->nullable();
            $table->text('privacy_url')->nullable();
            $table->text('color')->nullable();
            $table->text('theme_color')->nullable();
            $table->text('theme_color_two')->nullable();
            $table->text('logo')->nullable();
            $table->text('review_type')->nullable();
            $table->text('font')->nullable();
            $table->text('email_number')->nullable();

            $table->text('serp_api_key')->nullable();
            $table->text('yelp_api_key')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
    }
};
