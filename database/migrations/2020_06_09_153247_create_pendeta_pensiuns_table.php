<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendetaPensiunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendeta_pensiuns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birthPlace');
            $table->date('birthDate');
            $table->string('gender');
            $table->date('dutyBegin');
            $table->date('dutyEnd');
            $table->string('address');
            $table->string('email');
            $table->bigInteger('phoneNumber');
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
        Schema::dropIfExists('pendeta_pensiuns');
    }
}
