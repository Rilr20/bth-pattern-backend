<?php

use App\Models\Bike;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->integer('battery');
            $table->integer('velocity');
            $table->float('X');
            $table->float('Y');
            $table->timestamps();
        });
        $this->migrationCreate();
    }

    public function migrationCreate()
    {

        for ($i = 0; $i < 10; $i++) {
            $vaccine = new Bike();
            $vaccine->status = "tillgänglig";
            $vaccine->battery = 100;
            $vaccine->velocity = 0;
            $vaccine->X = 0;
            $vaccine->Y = 0;
            $vaccine->save();
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}
