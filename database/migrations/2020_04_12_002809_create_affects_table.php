<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affects', function (Blueprint $table) {
           // $table->bigInteger('id_user')->unsigned();
          $table->bigInteger('id_modul')->unsigned();

          //$table->foreign('id_user')->references('id')->on('users');
          $table->foreign('id_modul')->references('id')->on('moduls');
         
         // $table->primary(['id_user','id_modul']);

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
        Schema::dropIfExists('affects');
    }
}
