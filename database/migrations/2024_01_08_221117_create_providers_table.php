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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('cuit_provider',11);
            $table->string('name_provider',50);
            $table->string('fantasyName_provider',20);
            $table->string('phone_provider',10)->nullable();
            $table->string('country_provider',20)->nullable();
            $table->string('state_provider',20)->nullable();
            $table->string('city_provider',20)->nullable();
            $table->string('postalCode_provider',10)->nullable();
            $table->string('address_provider',100)->nullable();
            $table->string('alias_provider',20)->nullable();
            $table->string('contactName_provider',50)->nullable();
            $table->timestamps();
            $table->boolean('active_provider')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
