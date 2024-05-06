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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombre");
            $table->double("precio", 4, 2);
            $table->unsignedBigInteger("idAlmacen");
            $table->foreign("idAlmacen")->references("id")->on("almacenes")->onDelete("cascade");
            $table->unsignedBigInteger("idCategoria");
            $table->foreign("idCategoria")->references("id")->on("categorias")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
