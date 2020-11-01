<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('orderheader_id');
            $table->decimal('quantity');
            $table->decimal('price');
            $table->decimal('subtotal');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('orderheader_id')->references('id')->on('order_headers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_details', function (Blueprint $table) {

            $table->dropForeign('order_details_product_id_foreign');
            $table->dropForeign('order_details_order_header_id_foreign');
        });
        Schema::dropIfExists('order_details');
    }
}
