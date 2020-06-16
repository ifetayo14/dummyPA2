<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataGerejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_gerejas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gereja');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('jlh_jemaat');
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
        Schema::dropIfExists('data_gerejas');
    }
}
