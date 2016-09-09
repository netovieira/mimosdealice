<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecipesType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     *  id	    integer
        name	varchar(30)
        color	varchar(17)


     */
    public function up()
    {
        Schema::create('recipes_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('color', 17);
            $table->timestamps();
        });

        Schema::table('product_recipe', function($table)
        {
            $table->foreign('recipetype_id')
                ->references('id')->on('recipes_types')
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
        Schema::table('product_recipe', function($table)
        {
            $table->dropForeign('product_recipe_recipetype_id_foreign');
        });
        Schema::drop('product_recipe');
    }
}
