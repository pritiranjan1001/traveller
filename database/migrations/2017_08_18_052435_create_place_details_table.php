<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('place_Details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_place');
            $table->string('map_url')->default('default.jpg');
            $table->string('h_reach');
            $table->string('main_points');
            $table->string('pl_details');
            $table->string('best_visit');
            $table->softDeletes();
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
         Schema::dropIfExists('place_Details');
    }
}
