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
        Schema::create('repairjobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("RepairMotorcycle_ID");
            $table->bigInteger("Employee_ID");
            $table->bigInteger("Customer_ID");
            $table->string("RepairJob_Description");
            $table->Integer("Part_TotalCost");
            $table->Integer("Work_cost");
            $table->string("Ship_Date");
            $table->string("RepairJob_Status");
            $table->Integer("RepairJob_TotalPrice");
           
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
        Schema::dropIfExists('repairjobs');
    }
};
