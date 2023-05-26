<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->index('department_id');
            $table->bigInteger('prerequisite_id')->unsigned()->nullable();
            $table->index('prerequisite_id');
            $table->bigInteger('professor_id')->unsigned()->nullable();
            $table->index('professor_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
