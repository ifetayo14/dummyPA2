<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGerejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gereja', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pendeta');
            $table->string('alamat');
            $table->string('resort');
            $table->integer('jemaat');
            $table->string('fax');
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
        Schema::dropIfExists('gereja');
    }
}
