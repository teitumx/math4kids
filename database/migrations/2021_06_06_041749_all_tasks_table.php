<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('all_tasks', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->foreignId('user_id')->references('user_id')->on('users');
                $table->foreignId('difficulty_type_id')->references('difficulty_type_id')->on('difficulty_types');
                $table->enum('type', Config::get('constants.types'));
                $table->tinyInteger('count_examples')->unsigned()->default('0');
                $table->tinyInteger('mistakes')->unsigned()->default('0');
                $table->mediumInteger('time')->unsigned()->default('0'); //В секундах
                $table->mediumInteger('points')->unsigned()->default('0');
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
        Schema::dropIfExists('all_tasks');
    }
}
