<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('customer');
            $table->integer('governorate_id');
            $table->integer('phone');
            $table->text('address');
            $table->integer('department_id');
            $table->string('country_id', '20');
            $table->integer('product_id');
            $table->integer('price_discount')->nullable();
            $table->integer('edit_commission')->nullable();
            $table->integer('product_quantity');
            $table->integer('status_id');
            $table->integer('sale_source_id');
            $table->string('shipping_method');
            $table->text('shipping_note');
            $table->text('internal_notes');
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
        Schema::dropIfExists('orders');
    }
}
