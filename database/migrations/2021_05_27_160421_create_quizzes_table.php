<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('quiz_id');
            $table->string('text')->nullable(false);
            $table->json('answers')->nullable(false);
            $table->tinyInteger('answer')->nullable(false);
            $table->foreignId('difficulty_type_id')->references('difficulty_type_id')->on('difficulty_types');
            $table->enum('type', ['summ', 'mult', 'div', 'diff'])->nullable(true);
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
        Schema::dropIfExists('quizzes');
    }
}
