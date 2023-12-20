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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('cuil_employee');
            $table->string('name1_employee',20);
            $table->string('name2_employee',20)->nullable();
            $table->string('lastname1_employee',20);
            $table->string('lastname2_employee',20)->nullable();
            $table->string('phone_employee',10)->nullable();
            $table->unsignedBigInteger('position_employee');
            $table->foreign('position_employee')->references('id')->on('positions');
            $table->decimal('salary_employee',12,2,true)->nullable();
            $table->timestamps();
            $table->boolean('active_employee')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
