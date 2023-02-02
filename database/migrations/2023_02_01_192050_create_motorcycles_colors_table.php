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
        Schema::create('motorcycles_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brands_id');
            $table->unsignedBigInteger('models_id');
            $table->string("color_name");
            $table->timestamps();
            $table->foreign('brands_id')->references('id')->on('motorcycle_brands');
            $table->foreign('models_id')->references('id')->on('motorcycle_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorcycles_colors');
    }
};
