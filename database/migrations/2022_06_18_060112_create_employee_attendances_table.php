<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('todays_date')->nullable();
            $table->string('employee_department')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('employee_email')->nullable();
            $table->string('employee_designation')->nullable();
            $table->string('onsite_employee')->nullable();
            $table->string('offsite_employee')->nullable();
            $table->string('absent_employee')->nullable();
            $table->enum('attendence_status', ['0', '1'])->default('1')->comment('0=inactive,1=active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_attendances');
    }
}
