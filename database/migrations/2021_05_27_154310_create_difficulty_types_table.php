<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDifficultyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('difficulty_types')) {
            Schema::create('difficulty_types', function (Blueprint $table) {
                $table->bigIncrements('difficulty_type_id');
                $table->string('title', 255)->nullable(false)->unique();
                $table->integer('count_examples')->nullable(false);
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
        Schema::dropIfExists('difficulty_types');
    }
}
