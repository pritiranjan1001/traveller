<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_img', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('img_url_one')->default('default.jpg');
            $table->string('img_url_two')->default('default.jpg');
            $table->string('img_url_tee')->default('default.jpg');
            $table->string('img_url_for')->default('default.jpg');
            $table->string('img_url_fve')->default('default.jpg');
            $table->string('img_des_1');
            $table->string('img_des_2');
            $table->string('img_des_3');
            $table->string('img_des_4');
            $table->string('img_des_5');
            $table->string('hd_name');
            $table->string('ab_details');
            $table->string('loc_watch');
            $table->string('l_hotels');
            $table->string('r_cipies');
            $table->string('best_points');
            $table->integer('p_blish');
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
        Schema::dropIfExists('travel_img');
    }
}
 