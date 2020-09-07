<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeededBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needed_bloods', function (Blueprint $table) {
            $table->id();
            $table->string('quantity');
            $table->date('datetime');
            $table->foreignId('bloods_id');
            $table->foreign('bloods_id')->references('id')->on('bloods');
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
        Schema::dropIfExists('needed_bloods');
    }
}
