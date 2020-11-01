<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_headers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('deliverymen_id');
            $table->unsignedInteger('typedeliverie_id');
            $table->date('date');
            $table->string('hour');
            $table->boolean('status')->default(true);
            $table->string('address');
            $table->decimal('shipping', 8, 2);
            $table->decimal('tax', 8, 2);
            $table->decimal('Total', 8, 2);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('deliverymen_id')->references('id')->on('deliverymens');
            $table->foreign('typedeliverie_id')->references('id')->on('type_deliveries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_headers', function (Blueprint $table) {
            $table->dropForeign('order_headers_user_id_foreign');
            $table->dropForeign('order_headers_deliverymen_id_foreign');
            $table->dropForeign('order_headers_typedeliverie_id_foreign');
        });
        Schema::dropIfExists('order_headers');
    }
}
