<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TengoNecesitoComoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('tengo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('body', 250);
            $table->timestamps();
        });

            Schema::create('necesito', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('body', 250);
            $table->timestamps();
        });  


            Schema::create('como', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('body', 250);
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
        Schema::drop('tengo');
        Schema::drop('necesito');
        Schema::drop('como');
    }
}