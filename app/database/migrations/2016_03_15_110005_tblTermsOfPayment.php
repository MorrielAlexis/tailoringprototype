<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTermsOfPayment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblTermsOfPayment', function(Blueprint $table){
			$table->string('strTermsOfPaymentID')->primary();
			$table->string('strTOPName');
			$table->string('st rTOPDescription', 255);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblTermsOfPayment');
	}

}
