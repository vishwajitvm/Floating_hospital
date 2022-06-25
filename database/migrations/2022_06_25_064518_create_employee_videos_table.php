<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_videos', function (Blueprint $table) {
            $table->id();
            $table->string('emp_video_name')->nullable();
            $table->string('emp_video_url')->nullable();
            $table->enum('employee_status', ['0', '1'])->default('1')->comment('0=inactive,1=active');
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
        Schema::dropIfExists('employee_videos');
    }
}
