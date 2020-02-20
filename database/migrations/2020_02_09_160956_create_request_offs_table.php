<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestOffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_offs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reason');
            $table->dateTime('interval_time_start');
            $table->dateTime('interval_time_end');
            $table->dateTime('date');
            $table->string('to');
            $table->string('carbon_copy');
            $table->bigInteger('employee_id');
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
        Schema::dropIfExists('request_offs');
    }
}
