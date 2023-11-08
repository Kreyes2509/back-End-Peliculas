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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('DirectorID');
            $table->foreign('DirectorID')->references('id')->on('directores');
            $table->unsignedBigInteger('CategoryID');
            $table->foreign('CategoryID')->references('id')->on('categorias');
            $table->string("Duration");
            $table->longText("Synopsis");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
