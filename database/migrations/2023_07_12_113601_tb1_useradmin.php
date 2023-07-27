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
        Schema::create('useradmin', function (Blueprint $table) {
            $table->increments('useradmin_id');
            $table->string('useradmin_email');
            $table->string('useradmin_name');
            $table->string('useradmin_password');
            $table->string('useradmin_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useradmin');
    }
};
