<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('medications', function($table) {
			$table->increments('id');
			$table->integer('uid');
			$table->string('name');
			$table->smallInteger('dosage_volume');
			$table->string('dosage_unit');
			$table->string('frequency');
			$table->smallInteger('count');
			$table->string('ndc', 15);
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('medications');
	}

}
