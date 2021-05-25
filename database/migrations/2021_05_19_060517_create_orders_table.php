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
            $table->timestamps();
            $table->string('order_date')->nullable();
            $table->string('user_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('message')->nullable();
            $table->string('weight')->nullable();
            $table->int('price')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pin_no')->nullable();
            $table->string('order_no')->nullable();
            $table->string('status')->nullable();
            $table->string('month')->nullable();
            $table->date('delivery_date')->nullable();


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
