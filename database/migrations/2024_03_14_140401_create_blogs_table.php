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
        Schema::create('blogs', function (Blueprint $table) {
            $table->string('blog_category');
            $table->string('blog_creator');
            $table->string('blog_head');
            $table->string('blog_sub_head');
            $table->longText('blog_img');
            $table->longText('blog_desc');
            $table->string('blog_seo_title');
            $table->text('blog_seo_desc');
            $table->string('blog_slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
