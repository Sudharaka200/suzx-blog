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
        Schema::create('all_posts', function (Blueprint $table) {
            $table->id();
            $table->string('img_url1')->default('default.jpg');
            $table->string('title1')->default('title');
            $table->string('description1')->default('description'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_posts');
    }
};
