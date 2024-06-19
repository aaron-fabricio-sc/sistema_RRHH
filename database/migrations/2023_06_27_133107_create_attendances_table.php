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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->time("entrada")->nullable();
            $table->time("salida")->nullable();

            $table->string("tipo_asistencia")->nullable();
            $table->string("minutos_diferencia")->nullable();

            $table->unsignedBigInteger("employee_id")->nullable();


            $table->foreign("employee_id")->references('id')->on('employees')->onDelete('set null')->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
