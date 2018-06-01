<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /*   Schema::create('projects', function (Blueprint $table) {
         $table->increments('id');
        $table->string('project');
        $table->string('description');
        $table->string('url');
        $table->string('githubCode');
        $table->string('skillsUsed');
        $table->timestamps();
    });
    } */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
}
    public function down()
    {
        //
    }
}
