<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absens', function (Blueprint $table) {
            $table->id('id_absen');
            // $table->date('tanggal')->default(DB::raw('CURRENT_TIMESTAMP','Asia/Jakarta'))->setlocale('id');
            // $table->time('waktu')->default(DB::raw('CURRENT_TIMESTAMP','Asia/Jakarta'))->setlocale('id');
            $table->date('tanggal')->nullable();
            $table->time('waktu_datang')->nullable();
            $table->time('waktu_pulang')->nullable();
            $table->string('status_datang')->nullable();
            $table->string('status_pulang')->nullable();
            $table->string('surat')->nullable();
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
        Schema::dropIfExists('absens');
    }
}
