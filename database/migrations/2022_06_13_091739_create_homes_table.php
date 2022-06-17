<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('labelimage1');
            $table->string('labelimage2');
            $table->string('labelimage3');
            $table->string('ketimage1');
            $table->string('ketimage2');
            $table->string('ketimage3');
            $table->text('tentangkami'); //sudah berubah ke tipe data text di databasenya
            $table->text('visi'); //sudah berubah ke tipe data text di databasenya
            $table->text('misi'); //sudah berubah ke tipe data text di databasenya
            $table->text('OS_steel'); //sudah berubah ke tipe data text di databasenya
            $table->text('OS_civil'); //sudah berubah ke tipe data text di databasenya
            $table->text('OS_tank'); //sudah berubah ke tipe data text di databasenya
            $table->text('OS_srew'); //sudah berubah ke tipe data text di databasenya
            $table->text('OS_heavy'); //sudah berubah ke tipe data text di databasenya
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
        Schema::dropIfExists('homes');
    }
};
