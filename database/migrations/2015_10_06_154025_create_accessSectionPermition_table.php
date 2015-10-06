<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessSectionPermitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessSectionsPermission', function (Blueprint $table) {
            $table->unsignedInteger('access_id');
            $table->unsignedInteger('option_id');
            $table->foreign('access_id')->references('id')
                ->on('userAcessSections')
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
        Schema::drop('accessSectionsPermission');
    }
}
