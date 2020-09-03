<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('units');
            $table->date('last_date');
            $table->boolean('available');
            $table->foreignId('bloods_id');
            $table->foreign('bloods_id')->references('id')->on('bloods');
            $table->foreignId('donars_id');
            $table->foreign('donars_id')->references('id')->on('donars');
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
        Schema::dropIfExists('records');
    }
}
