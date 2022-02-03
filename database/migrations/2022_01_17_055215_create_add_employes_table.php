<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->Integer('phoneno');
            $table->string('address');
            $table->Integer('amount');
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
        Schema::dropIfExists('add_employes');
    }
}
