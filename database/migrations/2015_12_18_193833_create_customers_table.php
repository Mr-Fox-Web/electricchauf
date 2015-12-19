<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('civility');      
            $table->string('email',100); 
            $table->string('address',100);
            $table->integer('zipcode');
            $table->string('city',100);
            $table->integer('phone');
            $table->integer('gsm');
            $table->enum('language',['fr','nl','ang']);
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
