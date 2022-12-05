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
        Schema::create('shizuokas', function (Blueprint $table) {
            $table->id();
            $table->string('team');
            $table->string('name');
            $table->string('position');
            $table->integer('birthday');
            $table->integer('height');
            $table->integer('weight');
            $table->string('cap');
            $table->string('category');
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
        Schema::dropIfExists('shizuokas');
    }
};
