<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userAchievement', function (Blueprint $table) {
            $table->foreignId('user_id')->references('user_id')->on('users');
            $table->foreignId('achievement_id')->references('achievement_id')->on('achievements');
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
        Schema::table('userAchievement', function (Blueprint $table) {
//            $table->dropForeign('user_achievements_');
            $table->dropIfExists();
        });
        Schema::dropIfExists('userAchievement');
    }
}
