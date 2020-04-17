<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacionarEventosAcompanhamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acompanhamentos', function (Blueprint $table) {
            $table->integer('eventos_id')->unsigned();
            $table->foreign('eventos_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acompanhamentos', function (Blueprint $table) {
            $table->dropForeign('FK_EVENTOS_ACOMPANHAMENTOS');
            $table->dropColumn('eventos_id');
        });
    }
}
