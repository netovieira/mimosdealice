<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     *  id	        integer
        product_id	integer
        recipe_id	integer
     */
    public function up()
    {
        Schema::create('product_recipe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id', false, true);
            $table->integer('recipe_id', false, true);
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

            $table->foreign('recipe_id')
                ->references('id')->on('recipes')
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
            $table->dropForeign('product_recipe_product_id_foreign');
            $table->dropForeign('product_recipe_recipe_id_foreign');
        });
        Schema::drop('product_recipe');
    }
}
