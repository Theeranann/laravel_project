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
        Schema::create('motorcycles', function (Blueprint $table) {
            // $table->id();
            $table->bigInteger("motorcycle_ID")->startingValue(1);
            $table->string("motorcycle_Models");
            $table->string("motorcycle_Manufacturer");
            $table->string("motorcycle_Year");
            $table->string("motorcycle_LicensePlate");
            $table->string("motorcycle_Corlor");
            $table->string("motorcycle_mileage");
            $table->string("motorcycle_EngineNumber");
            $table->string("motorcycle_VinNumber");
            $table->string("motorcycle_Img");
            $table->string("motorcycle_Price");
            $table->string("SoldOut");
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorcycles');
    }
};
