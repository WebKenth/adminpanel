<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file_name');
            $table->string('type');
            $table->string('extension');
            $table->string('path');
            $table->integer('size')->nullable();
            $table->integer('folder_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            
            $table->foreign('folder_id')
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
        Schema::drop('files');
    }
}
