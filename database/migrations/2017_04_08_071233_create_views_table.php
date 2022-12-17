<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('im_url')->default('default.png');
            $table->string('hd_name');
            $table->string('ab_details');
            $table->string('q_otes');
            $table->string('v_hours');
            $table->string('a_ddress');
            $table->string('best_points');
            $table->string('bt_url')->default('default.png');
            $table->string('r_cipies');
            $table->string('btimg_url')->default('default.png');
            $table->string('l_address');
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
        //
         Schema::dropIfExists('views');
    }
}
