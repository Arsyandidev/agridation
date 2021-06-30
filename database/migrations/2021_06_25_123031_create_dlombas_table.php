<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDlombasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dlombas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pelogin');
            $table->string('tim')->nullable();
            $table->string('anggota1')->nullable();
            $table->string('anggota2')->nullable();
            $table->string('anggota3')->nullable();
            $table->string('anggota4')->nullable();
            $table->string('bukti');
            $table->string('status');
            $table->timestamps();

            $table->foreignId('user_id');
            $table->foreignId('lomba_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dlombas');
    }
}
