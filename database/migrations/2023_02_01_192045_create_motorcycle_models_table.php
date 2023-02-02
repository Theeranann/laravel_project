<?php

use App\Models\motorcycle_brand;
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
        Schema::create('motorcycle_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brands_id');
            $table->string("models_name");
            $table->timestamps();
            $table->foreign('brands_id')->references('id')->on('motorcycle_brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorcycle_models');
    }
};
