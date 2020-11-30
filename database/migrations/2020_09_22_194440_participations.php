<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Participations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->date('birth_date');
            $table->bigInteger('Id_imprezy')->unsigned();
            $table->bigInteger('used_gun')->unsigned();
            $table->timestamps();
            $table->rememberToken();
        });
        Schema::table('participations', function (Blueprint $table) {
            $table->foreign('Id_imprezy')->references('id')->on('imprezy');
            $table->foreign('used_gun')->references('id')->on('repliki');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
}
