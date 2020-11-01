<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('typeproduct_id');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreign('typeproduct_id')->references('id')->on('type_products');
            #      $table->foreign('clasificationproduct_id')->references('id')->on('clasification_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_typeproduct_id_foreign');
           #$table->dropForeign('products_clasificationproduct_id_foreign');
        });
        Schema::dropIfExists('products');
    }
}
