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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan');
            $table->text('description');
            $table->string('keywords');
            // $table->string('owner');
            $table->string('address');
            $table->string('instagram');
            $table->string('email');
            // $table->string('owner_instagram');
            $table->string('whatsapp');
            $table->text('gmaps');
            // $table->string('owner_image');
            $table->string('logo_image');
            $table->string('hero_image');
            $table->string('about_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website');
    }
};
