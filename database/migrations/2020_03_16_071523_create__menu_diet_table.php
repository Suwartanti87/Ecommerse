<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_menu_diet', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('idmenu');
            $table->string('kode');
            $table->string('nama');
            $table->string('foto');
            $table->longtext('keterangan');
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
        Schema::dropIfExists('_menu_diet');
    }
}
