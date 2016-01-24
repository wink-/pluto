<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('parts', function(Blueprint $table) {
            $table->engine='MYISAM';
            $table->increments('ID');
            $table->string('PARTNUM');
            $table->string('PROCNAME');
            $table->string('CUSTCODE');
            $table->double('PRICE');
            $table->string('PRICECODE');
            $table->string('PARTNAME');
            $table->string('PROCNUM');
            $table->string('METHOD');
            $table->boolean('CERTREQ');
            $table->boolean('STRESSRLF');
            $table->string('SPEC');
            $table->string('MATERIAL');
            $table->double('PLTHICKMIN');
            $table->double('PLTHICKMAX');
            $table->text('SPLREQR');
            $table->double('SQRAREAPT');
            $table->double('CUSTWTPC');
            $table->double('FINISHWTPC');
            $table->double('COATINGWT');
            $table->string('HTRTCND');
            $table->double('NORMLOTSIZ');
            $table->double('X');
            $table->double('Y');
            $table->double('Z');
            $table->double('MATHICKNSS');
            $table->double('QUAL1');
            $table->double('QUAL2');
            $table->double('QUAL3');
            $table->double('QUAL4');
            $table->double('QUAL5');
            $table->double('QUAL6');
            $table->text('NOTES');
            $table->text('OpNotes');
            $table->integer('ImageID');
            $table->integer('pre_bake_temperature');
            $table->string('pre_bake_time');
            $table->integer('embrittlement_bake_temperature');
            $table->string('embrittlement_bake_time');
            $table->integer('adhesion_bake_temperature');
            $table->string('adhesion_bake_time');
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
        Schema::drop('parts');
    }

}
