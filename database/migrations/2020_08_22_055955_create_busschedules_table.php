<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busschedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('operator_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('subregion_id');
            $table->time('start_time');
            $table->time('arrive_time');
            $table->integer('price');
            $table->string('description');
            $table->timestamps();
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
            $table->foreign('operator_id')->references('id')->on('operators')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('subregion_id')->references('id')->on('subregions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('busschedules');
    }
}
