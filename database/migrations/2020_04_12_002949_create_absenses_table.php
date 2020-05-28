<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenses', function (Blueprint $table) {
            $table->bigIncrements('id');

           // $table->bigInteger('user_id')->unsigned();
           // $table->unsignedBigInteger('id_seance');
            $table->dateTime('date_abs');

            $table->timestamps();
          //  $table->foreign('user_id')->references('id')->on('users');
         //   $table->foreign('id_seance')->references('id')->on('seances');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absenses');
    }
}
