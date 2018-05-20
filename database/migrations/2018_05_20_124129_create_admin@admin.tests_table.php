<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmin@admin.testsTable extends Migration 
{
	public function up()
	{
		Schema::create('admin@admin.tests', function(Blueprint $table) {
            $table->increments('id');
            
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('admin@admin.tests');
	}
}
