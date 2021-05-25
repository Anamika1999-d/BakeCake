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
            $table->string('Category');
            $table->longText('detail');
            $table->string('Qunatity')->nullable();
            $table->string('Price')->nullable();
            $table->string('priceForhalfkg')->nullable();
            $table->string('priceFor1kg')->nullable();
            $table->string('priceFor1halfkg')->nullable();
            $table->string('priceFor2kg')->nullable();
            $table->string('pic1')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
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
