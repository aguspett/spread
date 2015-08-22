<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dircom');
            $table->unsignedInteger('localidad')->index();
            $table->string('email')->unique();
            $table->string('logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Clientes', function (Blueprint $table) {
            //
        });
    }
}
