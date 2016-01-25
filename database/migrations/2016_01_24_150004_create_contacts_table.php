<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('contacts', function(Blueprint $table) {
            $table->engine='MYISAM';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('customer_id');
            $table->foreign('customer_id')->references('CUSTCODE')->on('customer')->onDelete('cascade');
            $table->string('email');
            $table->string('phone');
            $table->string('extension');
            $table->string('cell');
            $table->string('department');
            $table->boolean('active');
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
        Schema::table('contacts', function($table)
        {
            $table->dropForeign('contacts_customer_id_foreign');

        });
        //Schema::dropForeign('contacts_customer_id_foreign');
        Schema::drop('contacts');
    }

}
