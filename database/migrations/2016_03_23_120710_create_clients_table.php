<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('raisoSocial');
            $table->string('adresse');
            $table->string('email');
            $table->string('phone');
            $table->string('fax');
            $table->string('carteFiscale');
            $table->string('certificatExestance');
            $table->binary('carteFiscaleImage');
            $table->binary ('certificatExestanceImage');

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
        Schema::drop('clients');
    }
}
