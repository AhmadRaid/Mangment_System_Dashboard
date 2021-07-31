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
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->text('description');
            $table->integer('department_id');
            $table->integer('country_id');
            $table->integer('store_id');
            $table->decimal('price', 18, 2)->unsigned();
//            $table->decimal('special_price', 18, 4)->unsigned()->nullable();
//            $table->foreign('store_id')->references('id')->on('store')->onDelete('cascade');
//            $table->foreign('store_id')->references('id')->on('store')->onDelete('cascade');
//            $table->foreignId('store_id');
//            $table->foreignId('category_product');
            $table->integer('quantity_stock')->nullable();
            $table->boolean('active')->default(1);
//            $table->boolean('attributes');
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
        Schema::dropIfExists('products');
    }
}
