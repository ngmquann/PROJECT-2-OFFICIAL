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
        Schema::create('news_gundam', function (Blueprint $table) {
            $table->increments('news_id');
            $table->integer('category_id');
            $table->string('news_titles');
            $table->string('news_url');
            $table->string('news_des');
            $table->string('news_content');
            $table->integer('news_status');
            $table->string('news_images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_gundam');
    }
};
