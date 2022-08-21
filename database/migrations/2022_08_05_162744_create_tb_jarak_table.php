<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbJarakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jarak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kecamatan_a')
                ->constrained('tb_kecamatan')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('id_kecamatan_b')
                ->constrained('tb_kecamatan')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->integer('jarak');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_jarak');
    }
}
