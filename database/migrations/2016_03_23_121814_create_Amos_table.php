<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Amos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('maitreOuvrage');
            $table->string('maitreOuvre');
            $table->string('place');
            $table->date('date');
            $table->string('contractRef');
            $table->date('contractDate');
            $table->date('contractTime');
            $table->string('contractObject');
            $table->binary('image');
            $table->integer('idContract');
            $table->integer('idClient');
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
        Schema::drop('Amos');
    }
}
