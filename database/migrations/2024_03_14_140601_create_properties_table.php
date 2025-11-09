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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('property_category');
            $table->string('property_name');
            $table->longText('property_amenities');
            $table->longText('property_img');
            $table->longText('property_desc');
            $table->string('property_bedrooms');
            $table->string('property_bathrooms');
            $table->string('property_area');
            $table->string('property_garages');
            $table->text('property_year');
            $table->text('property_plot_size');
            $table->longText('property_map_url');
            $table->longText('property_address');
            $table->string('property_mobile_num');
            $table->string('property_value');
            $table->string('property_seo_title');
            $table->text('property_seo_desc');
            $table->string('property_slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
