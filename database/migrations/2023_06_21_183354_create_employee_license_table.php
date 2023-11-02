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
        Schema::create('employee_license', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("employee_id")->nullable();
            $table->unsignedBigInteger("license_id")->nullable();

            $table->date("start_date");
            $table->date("final_date");

            $table->tinyInteger("status_license")->nullable();
            $table->tinyInteger("status")->default(1);

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('set null')->onUpdate('cascade');

            $table->foreign('license_id')->references('id')->on('licenses')->onDelete('set null')->onUpdate('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_license');
    }
};
