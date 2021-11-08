<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingspaceBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkingspace_bikes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parkingspace_id');
            $table->unsignedBigInteger('bike_id');
            $table->dateTime('arrival');
            $table->dateTime('departure')->nullable();
            $table->timestamps();

            $table->foreign('parkingspace_id')->references('id')->on('parkingspaces')->onDelete('cascade');
            $table->foreign('bike_id')->references('id')->on('bikes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkingspace_bikes');
    }
}
