<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar las migraciones.
     */
    public function up(): void
    {
        Schema::create('hemeroteca', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['impresa', 'digital']);
            $table->string('file_path');
            $table->date('published_at');
            $table->timestamps();
        });
    }

    /**
     * Revertir las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('hemeroteca');
    }
};
