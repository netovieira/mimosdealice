<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     *  id	        integer
        streeet	    varchar(120)
        district	varchar(120)
        number	    integer
        complement	varchar(30)
        city	    varchar(30)
        country	    varchar(2)

     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('streeet');
            $table->string('district',120);
            $table->integer('number');
            $table->string('complement',50);
            $table->string('city',120);
            $table->string('country',2);
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('orders', function($table)
        {
            $table->foreign('address_id')
                ->references('id')->on('addresses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function($table)
        {
            $table->dropForeign('orders_address_id_foreign');
        });
        Schema::drop('addresses');
    }
}
