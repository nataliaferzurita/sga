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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product',20);
            $table->string('artProvider_product',20);
            $table->string('fabric_product',20);
            $table->string('season_product',20);
            $table->string('typeProduct_product',20);
            $table->string('size_product',10);
            $table->string('color_product',20);
            $table->string('description_product',100);
            $table->mediumText('photo_product')->nullable();
            $table->integer('stock_product');
            $table->decimal('cost_product',12,2,true);
            $table->decimal('price_product',12,2,true);
            $table->unsignedBigInteger('provider_product');
            $table->foreign('provider_product')->references('id')->on('providers');
            $table->boolean('active_product')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
