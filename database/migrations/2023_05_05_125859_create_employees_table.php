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
            $table->string("name");
            $table->string("firts_last_name");
            $table->string("second_last_name")->nullable();

            $table->longText("image")->nullable();
            $table->longText("cv")->nullable();

            $table->date("birthdate");
            $table->string("gender");
            $table->string("phone");
            $table->string("email")->unique()->nullable();
            $table->string("type_document");
            $table->string("document_number");
            $table->string("document_complement")->nullable();

            $table->unsignedBigInteger("ci_extension_id")->nullable();
            $table->foreign("ci_extension_id")->references('id')->on('ci_extensions')->onDelete('set null')->onUpdate("cascade");
            $table->longText("address_1");
            $table->longText("address_2")->nullable();
            $table->longText("previous_work_details")->nullable();
            $table->date("start_date");
            $table->date("final_date")->nullable();

            $table->longText("additional_employee_details")->nullable();
            $table->string('working_time')->nullable();

            $table->integer('days_vacations')->nullable()->default(0);
            $table->date("vacation_start_date")->nullable();
            $table->date("vacation_final_date")->nullable();
            $table->integer('take_vacation')->nullable();



            $table->unsignedBigInteger('contract_id')->nullable();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();


            $table->foreign("contract_id")->references('id')->on('contracts')->onDelete('set null')->onUpdate("cascade");
            $table->foreign("job_id")->references('id')->on('jobs')->onDelete('set null')->onUpdate("cascade");
            $table->foreign("user_id")->references('id')->on('users')->onDelete('set null')->onUpdate("cascade");

            $table->tinyInteger("status")->default(1);
            $table->timestamps();
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
