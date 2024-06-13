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
        Schema::create('cantidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("idFactura");
            $table->foreign("idFactura")->references("id")->on("facturas")->onDelete("cascade");
            $table->unsignedBigInteger("idProducto");
            $table->foreign("idProducto")->references("id")->on("productos")->onDelete("cascade");
            $table->integer("cantidad");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cantidad');
    }
};
