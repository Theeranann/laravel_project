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
            $table->increments('motorcycle_ID');
            $table->unsignedBigInteger("motorcycle_Models");
            $table->unsignedBigInteger("motorcycle_Manufacturer");
            $table->unsignedBigInteger("motorcycle_Corlor");

            $table->string("motorcycle_Year");
            $table->string("motorcycle_LicensePlate");

            $table->string("motorcycle_mileage");
            $table->string("motorcycle_EngineNumber");
            $table->string("motorcycle_VinNumber");
            $table->string("motorcycle_Img")->nullable();
            $table->string("motorcycle_Price");
            $table->string("SoldOut");
            $table->timestamps();
            $table->SoftDeletes();
            
            $table->foreign('motorcycle_Manufacturer')->references('id')->on('motorcycle_brands');
            $table->foreign('motorcycle_Models')->references('id')->on('motorcycle_models');
            $table->foreign('motorcycle_Corlor')->references('id')->on('motorcycles_colors');
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
