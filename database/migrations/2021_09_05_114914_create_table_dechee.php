<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDechee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dechet', function (Blueprint $table) {
            $table->id();
            $table->float('qte');
            $table->float('prix')->nullable();
            $table->text('addr')->nullable();
            $table->text('description')->nullable();
            $table->integer('tel')->nullable();
            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
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
        Schema::dropIfExists('Dechet');
    }
}
