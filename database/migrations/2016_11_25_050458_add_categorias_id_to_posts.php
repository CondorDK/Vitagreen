<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriasIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('necesitos', function (Blueprint $table) {
            $table->integer('categoria_id')->nullable()->after('title')->unsigned();
        });

        Schema::table('tengos', function (Blueprint $table) {
            $table->integer('categoria_id')->nullable()->after('title')->unsigned();
        });

        Schema::table('comos', function (Blueprint $table) {
            $table->integer('categoria_id')->nullable()->after('title')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('necesitos', function (Blueprint $table) {
            $table->dropColumn('categoria_id');
        });

        Schema::table('tengos', function (Blueprint $table) {
            $table->dropColumn('categoria_id');
        });

        Schema::table('comos', function (Blueprint $table) {
            $table->dropColumn('categoria_id');
        });
    }
}
