<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('filepath');
            $table->string('checksum');
            $table->string('type');
            $table->string('version');
            $table->string('software');
            $table->integer('user_id')->unsigned();
            $table->integer('document_id')->unsigned();
            $table->binary('data')->nullable();
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
        Schema::drop('file_documents');
    }
}
