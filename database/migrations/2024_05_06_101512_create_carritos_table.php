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
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idUsuario");
            $table->foreign("idUsuario")->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger("idProducto");
            $table->foreign("idProducto")->references("id")->on("productos")->onDelete("cascade");
            $table->integer('Cantidad')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito');
    }
};
