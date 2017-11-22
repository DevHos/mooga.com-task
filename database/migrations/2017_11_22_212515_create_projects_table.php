<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('projects');
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('project_type');
            $table->string('project_field');
            $table->string('project_status');
            $table->longtext('description');
            $table->string('project_country');
            $table->string('project_needs');
            $table->string('budget');
            $table->string('project_img')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
