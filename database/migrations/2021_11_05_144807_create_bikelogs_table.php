<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikelogs', function (Blueprint $table) {
            $table->id();
            $table->float('start_x');
            $table->float('start_y');
            $table->dateTime('start_time');
            $table->float('stop_x')->nullable();
            $table->float('stop_y')->nullable();
            $table->dateTime('stop_time')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('bike_id');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bikelogs');
    }
}
