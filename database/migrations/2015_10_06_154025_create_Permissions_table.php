<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Permissions', function (Blueprint $table) {
            $table->unsignedInteger('access_id');
            $table->unsignedInteger('option_id');
            $table->foreign('access_id')->references('id')
                ->on('Accesses')
                ->onDelete('cascade');
            $table->foreign('option_id')->references('id')
                ->on('options')
                ->onDelete('cascade');
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
        Schema::drop('Permissions');
    }
}
