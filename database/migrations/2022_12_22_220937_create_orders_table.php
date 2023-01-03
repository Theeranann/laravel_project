<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->bigInteger("OrderType_ID");
            $table->bigInteger("Employee_ID");
            $table->bigInteger("Customer_ID");
            $table->bigInteger("Motorcycle_ID");
            $table->Integer("Order_Price");
            $table->string("Buys_Order_Status");
            $table->string("payment_type");
            $table->string("Reserve_EndDate");
            $table->string("CancelDetail");
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
};
