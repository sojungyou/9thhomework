<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{

    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('名前(name)');
            $table->string('性別(gender)');
            $table->string('趣味(hobby)');
            $table->string('自己紹介(introduction)');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
