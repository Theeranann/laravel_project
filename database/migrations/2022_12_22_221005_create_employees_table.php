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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("employees_Role_ID");
            $table->string("employees_firstName");
            $table->string("employees_lastName");
            $table->string("employees_Gender");
            $table->string("employees_BirthDate");
            $table->string("employees_phoneNumber");
            $table->string("employees_Address");
            $table->string("employees_mail");
            $table->Integer("employees_salary");
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
        Schema::dropIfExists('employees');
    }
};
