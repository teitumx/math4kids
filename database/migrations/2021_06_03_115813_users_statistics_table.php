<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users_statistics')) {
            Schema::create('users_statistics', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->foreignId('user_id')->references('user_id')->on('users');
                $table->integer('count');
                $table->integer('total_time'); //В секундах
                $table->integer('points');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_statistics');
    }
}
