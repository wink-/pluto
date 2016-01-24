<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('customers', function(Blueprint $table) {
            $table->engine='MYISAM';
            $table->increments('ID');
            $table->string('CUSTCODE');
            $table->string('CUSTNAME');
            $table->string('ADDRESS1');
            $table->string('ADDRESS2');
            $table->string('ADDRESS3');
            $table->string('CITY');
            $table->string('STATE');
            $table->string('ZIP');
            $table->string('SHIPTO');
            $table->integer('destination_id');
            $table->string('SHIPVIA');
            $table->integer('carrier_id');
            $table->string('DEFFREIGHT');
            $table->string('CONTACT1');
            $table->string('PHONE1');
            $table->string('EXTENSION1');
            $table->string('CONTACT2');
            $table->string('PHONE2');
            $table->string('EXTENSION2');
            $table->string('FAX');
            $table->string('EMAIL');
            $table->boolean('COD');
            $table->string('TAXIDEN');
            $table->string('REMARKS');
            $table->dateTime('TimeStamp');
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
        Schema::drop('customers');
    }

}
