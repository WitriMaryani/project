ss<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubKejuruansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub__kejuruans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_sub_kejuruan')->unique();
            $table->string('nama_sub_kejuruan');
            $table->string('kd_kejuruan');
            $table->foreign('kd_kejuruan')->references('kd_kejuruan')
                  ->on('kejuruans')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('keterangan');
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
        Schema::dropIfExists('sub__kejuruans');
    }
}
