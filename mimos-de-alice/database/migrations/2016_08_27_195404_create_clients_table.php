<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     *  id	    integer
        name	integer
        email	integer
        phone	varchar(30)

     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',120);
            $table->string('email');
            $table->string('phone',60);
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('orders', function($table)
        {
            $table->foreign('client_id')
                ->references('id')->on('clients')
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
            $table->dropForeign('orders_client_id_foreign');
        });
        Schema::drop('clients');
    }
}
