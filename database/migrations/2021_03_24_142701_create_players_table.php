<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('player_id');
            $table->string('player_fname');
            $table->string('player_lname');
            $table->date('dob');
            $table->string('weight');
            $table->string('height');
            $table->string('medical_issue');
            $table->string('disabled');
            $table->string('school');
            $table->string('class');
            $table->integer('parent_id')->nullable();
            $table->string('image')->nullable();
            $table->string('position')->nullable();
            $table->string('foot')->nullable();
            $table->string('jezi')->nullable();
            $table->string('progress')->nullable();
            $table->string('nguvu')->nullable();
            $table->string('chenga')->nullable();
            $table->string('kumbukumbu')->nullable();
            $table->string('payment')->nullable()->default('Not Payed');
            $table->string('usajili')->nullable();
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
        Schema::dropIfExists('players');
    }
}
