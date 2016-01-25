<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscrepantmaterialreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('dmr', function(Blueprint $table) {
            $table->engine='MYISAM';
            $table->increments('id');
            $table->integer('workorder')->unsigned();
            $table->date('date_of_discrepancy');
            $table->text('description');
            $table->date('corrective_action_due_date');
            $table->enum('rejection_type', ['internal', 'external']);
            $table->text('internal_comments');

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
        Schema::drop('dmr');
    }

}
