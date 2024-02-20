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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('site_id');
            $table->foreignId('campaign_id');
            $table->text('net_promote_ans')->nullable();
            $table->text('nps_comment_ans')->nullable();
            $table->text('star_question_ans')->nullable();
            $table->text('review_platform_ans')->nullable();
            $table->text('video')->nullable();
            $table->json('contact_info_ans')->nullable();
            $table->json('private_feed_back_ans')->nullable();
            $table->text('facebook')->nullable();
            $table->text('google')->nullable();
            $table->text('twitter')->nullable();
            $table->enum('show',[0,1])->default(0);
            $table->enum('show_Thumbnail',[0,1])->default(0);
            $table->enum('show_star_review',[0,1])->default(0);
            $table->text('logo')->nullable();
            $table->text('background')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
