<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargingstationBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chargingstation_bikes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chargingstation_id');
            $table->unsignedBigInteger('bike_id');
            $table->dateTime('arrival');
            $table->dateTime('departure')->nullable();
            $table->timestamps();

            $table->foreign('chargingstation_id')->references('id')->on('chargingstations')->onDelete('cascade');
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
        Schema::dropIfExists('chargingstation_bikes');
    }
}
