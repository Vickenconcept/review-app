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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('slug')->unique();
            $table->foreignId('site_id');
            $table->foreignId('folder_id')->nullable();
            $table->string('name');
            $table->enum('no_negative',[0,1]);
            $table->enum('enable_text_review',[0,1])->default(1);
            $table->enum('enable_video_review',[0,1]);
            $table->enum('campaignType',['reviews','NPS'])->default('reviews');
            $table->string('language');
            $table->string('net_promote')->default('How would you rate our service?');
            $table->string('nps_comment')->default('');
            $table->text('nps_comment_desc')->nullable();
            $table->string('star_question')->nullable();
            $table->string('normal_review')->nullable();
            $table->string('normal_review_desc')->nullable();
            $table->string('review_platform')->nullable();
            $table->string('contact_info')->nullable();
            $table->string('video_review')->nullable();
            $table->text('video_review_desc')->nullable();
            $table->string('review_thanks')->nullable();
            $table->string('review_thanks_desc')->nullable();
            $table->string('private_feed_back')->nullable();
            $table->text('private_feed_back_desc')->nullable();
            $table->string('private_feed_back_Thanks')->nullable();
            $table->text('private_feed_back_Thanks_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
