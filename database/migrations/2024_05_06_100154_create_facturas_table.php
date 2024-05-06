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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombre");
            $table->unsignedBigInteger("idUsuario");
            $table->foreign("idUsuario")->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger("idDireccion");
            $table->foreign("idDireccion")->references("id")->on("direcciones")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};
