<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('id_product', true)->unsigned();
            $table->integer('id_shop')->unsigned();
            $table->integer('id_category')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('price');
            $table->text('keywords');
            $table->timestamps();
        });

        Schema::table('products', function ($table) {
            $table->foreign('id_shop')->references('id_shop')->on('shops');
            $table->foreign('id_category')->references('id_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
