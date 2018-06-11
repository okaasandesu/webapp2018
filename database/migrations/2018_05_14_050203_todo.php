<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //テーブル作成
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->string('place');
            $table->integer('size');
            $table->boolean('is_finished')->default(false);
            $table->timestamps();
        });



        Schema::create('tasks2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->string('place');
            $table->integer('size');
            $table->boolean('is_finished')->default(false);
            $table->timestamps();
        });

        Schema::create('tasks3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->string('place');
            $table->integer('size');
            $table->boolean('is_finished')->default(false);
            $table->timestamps();
         });
        Schema::create('tasks4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->string('place');
            $table->integer('size');
            $table->boolean('is_finished')->default(false);
            $table->timestamps();
        });
    }

    public function down(){
        //テーブル削除
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('tasks2');
        Schema::dropIfExists('tasks3');
        Schema::dropIfExists('tasks4');
        }




}