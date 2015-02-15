<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProducersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('producers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->text('paypal');
			$table->integer('active')->nullable();
			$table->integer('onsale')->nullable();
			$table->integer('upcomming')->nullable();
			$table->integer('preorder')->nullable();
			$table->integer('x-small')->nullable();
			$table->integer('medium')->nullable();
			$table->integer('large')->nullable();
			$table->integer('x-large')->nullable();
			$table->integer('xx-large')->nullable();
			$table->integer('xxx-large')->nullable();
			$table->integer('onesize')->nullable();
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
		Schema::drop('producers');
	}

}
