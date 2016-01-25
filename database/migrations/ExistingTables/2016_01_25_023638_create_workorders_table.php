<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('workorders', function(Blueprint $table) {
            $table->engine="MYISAM";
            $table->increments('ID');
            $table->integer('PartID');
            $table->integer('WORKORDR');
            $table->string('CUSTCODE');
            $table->string('PARTNUM');
            $table->string('PROCNAME');
            $table->double('PRICE');
            $table->string('PRICECODE');
            $table->boolean('REWORK');
            $table->date('DATERECV');
            $table->date('DATEREQD');
            $table->boolean('SHIPPED');
            $table->string('CUSTPO');
            $table->string('CUSTPL');
            $table->double('QTY');
            $table->char('QTYTYPE');
            $table->double('QTYSHIP');
            $table->double('QTYNOTSHIP');
            $table->string('SFTPL');
            $table->string('SHIPTO');
            $table->string('SHIPVIA');
            $table->string('FREIGHT');
            $table->boolean('COD');
            $table->boolean('STARTED');
            $table->boolean('COMPLETE');
            $table->dateTime('DATESHIP');
            $table->boolean('INVOICED');
            $table->integer('INVNUMBER');
            $table->dateTime('DATEINV');
            $table->double('COST');
            $table->text('WONOTE');
            $table->string('STEPNAME1');
            $table->double('TMANHRS1');
            $table->double('TOTHOURS1');
            $table->string('STEPNAME2');
            $table->double('TMANHRS2');
            $table->double('TOTHOURS2');
            $table->string('STEPNAME3');
            $table->double('TMANHRS3');
            $table->double('TOTHOURS3');
            $table->dateTime('TimeStamp');
            $table->integer('ImageID');
            $table->string('LastEdit');
            $table->boolean('HOT');
            $table->integer('Priority');
            $table->integer('CustID');

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
        Schema::drop('workorders');
    }

}
