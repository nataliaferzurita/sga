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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('dni_client',8);
            $table->string('name1_client',20);
            $table->string('name2_client',20)->nullable();
            $table->string('lastname_client',20);
            $table->string('lastname2_client',20)->nullable();
            $table->string('phone_client',10)->nullable();
            $table->string('country_client',20)->nullable();
            $table->string('state_client',20)->nullable();
            $table->string('city_client',20)->nullable();
            $table->string('postalCode_client',10)->nullable();
            $table->string('address_client',20)->nullable();
            $table->boolean('active_client')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
