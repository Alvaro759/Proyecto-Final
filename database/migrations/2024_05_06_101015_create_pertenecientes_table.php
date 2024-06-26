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
        Schema::create('pertenecientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("idProducto");
            $table->foreign("idProducto")->references("id")->on("productos")->onDelete("cascade");
            $table->unsignedBigInteger("idSubcategoria");
            $table->foreign("idSubcategoria")->references("id")->on("subcategorias")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perteneciente');
    }
};
