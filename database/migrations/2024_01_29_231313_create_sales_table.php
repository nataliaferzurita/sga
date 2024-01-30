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
            $table->unsignedBigInteger('idEmployee_sale');
            $table->unsignedBigInteger('idClient_sale');
            $table->unsignedBigInteger('idProduct_sale');
            $table->string('type_sale',20);
            $table->unsignedBigInteger('quantity_sale');
            $table->decimal('priceProduct_sale',12,2);
            $table->string('payment_sale');
            $table->boolean('active_sale')->default(true);
            $table->foreign('idEmployee_sale')->references('id')->on('employees');
            $table->foreign('idClient_sale')->references('id')->on('clients');
            $table->foreign('idProduct_sale')->references('id')->on('products');
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
