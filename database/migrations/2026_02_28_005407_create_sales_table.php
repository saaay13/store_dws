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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('sellers');
            $table->foreignId('client_id')->constrained('clients');
            $table->date('fecha');
            $table->decimal('total');
            $table->string('Direccion_entrega');
            $table->string('metodo_pago');
            $table->enum('state_sale', ['pendiente', 'enviado', 'entregado', 'cancelado'])->default('pendiente');
            $table->enum('state_payment', ['pendiente', 'pagado', 'cancelado'])->default('pendiente');
            $table->enum('state', ['activo', 'inactivo', 'eliminado'])->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
