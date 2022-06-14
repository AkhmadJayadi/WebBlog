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
            $table->string('tentangkami');
            $table->string('visi');
            $table->string('misi');
            $table->string('OS_steel');
            $table->string('OS_civil');
            $table->string('OS_tank');
            $table->string('OS_srew');
            $table->string('OS_heavy');
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
