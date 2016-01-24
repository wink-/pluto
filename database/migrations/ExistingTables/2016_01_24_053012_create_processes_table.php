<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('process', function(Blueprint $table) {
                $table->engine="MYISAM";
                $table->increments('ID');
                $table->string('PROCNAME');
                $table->string('DESCRIPT');
                $table->double('MINCOST');
                $table->boolean('RoHS');
                $table->boolean('REACH');
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
        Schema::drop('process');
    }

}
