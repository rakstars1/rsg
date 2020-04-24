<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RsgTable extends Migration
{
    public function up()
    {
        Schema::create('RSGTable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('score');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('RSGTable');
    }
}
