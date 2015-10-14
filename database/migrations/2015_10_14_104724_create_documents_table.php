<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned();
	        $table->string('designator');
            $table->string('name');
            $table->string('type');
            $table->string('formation');
            $table->string('document_type');
            $table->string('document_code');
            $table->string('sheets_format');
            $table->integer('sheets_count')->unsigned();
	

 			$table->integer('filedocument_id')->unsigned();
 			$table->integer('filedocument_original_id')->unsigned();
 			$table->integer('document_code_id')->unsigned();
 			$table->integer('project_id')->unsigned();
 			$table->integer('user_id')->unsigned();
 			$table->integer('subdivision_id')->unsigned();
 			$table->integer('organisation_id')->unsigned();
 			$table->integer('registration_card_id')->unsigned();

 			$table->integer('sign_develop_id')->unsigned();
 			$table->integer('sign_checked_id')->unsigned();
 			$table->integer('sign_n_control_id')->unsigned();
 			$table->integer('sign_approved_id')->unsigned();

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
        Schema::drop('documents');
    }
}
