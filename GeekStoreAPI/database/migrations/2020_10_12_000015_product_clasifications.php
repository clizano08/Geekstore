<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductClasifications extends Migration
{
    public function up()
    {
        Schema::create('product_clasifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('clasification_id');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('clasification_id')->references('id')->on('clasifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_clasifications', function (Blueprint $table) {
            $table->dropForeign('product_clasifications_clasification_id_foreign');
            $table->dropForeign('product_clasifications_product_id_foreign');
        });
        Schema::dropIfExists('product_clasifications');
    }
}
