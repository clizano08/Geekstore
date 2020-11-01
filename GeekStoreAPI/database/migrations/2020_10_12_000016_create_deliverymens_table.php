<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverymensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverymens', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_id');
            $table->string('name');
            $table->string('sournames');
            $table->string('phone');
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deliverymens', function (Blueprint $table) {
            $table->dropForeign('deliverymens_vehicle_id_foreign');
        });
        Schema::dropIfExists('deliverymens');
    }
}
