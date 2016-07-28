<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('folder_name');
            $table->string('path');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')
                  ->references('id')
                  ->on('folders')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('folders');
    }
}
