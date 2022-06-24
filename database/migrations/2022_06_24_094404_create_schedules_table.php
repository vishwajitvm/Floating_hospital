<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('LIC_dhs_3medical_total')->nullable();
            $table->string('lic_chc_1medical_total')->nullable();
            $table->string('help_moris_medical')->nullable();
            $table->string('queenbridge_total')->nullable();
            $table->string('astoria_total')->nullable();
            $table->string('dental_dhs')->nullable();
            $table->string('denatl_chc')->nullable();
            $table->string('podiatry_total')->nullable();
            $table->string('id_clinic_total')->nullable();
            $table->string('behavioral_chc_telehelth')->nullable();
            $table->string('behavioral_chc_inperson')->nullable();
            $table->string('behavioral_dhs_telehelth')->nullable();
            $table->string('behavioral_dhs_inperson')->nullable();
            $table->enum('schedule_status', ['0', '1'])->default('1')->comment('0=inactive,1=active');
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
        Schema::dropIfExists('schedules');
    }
}
