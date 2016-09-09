<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_id', false, true);
            $table->integer('ingredient_id', false, true);
            $table->float('quantity');
            $table->timestamps();

            $table->foreign('recipe_id')
                ->references('id')->on('recipes')
                ->onDelete('cascade');
            $table->foreign('ingredient_id')
                ->references('id')->on('ingredients')
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
        Schema::table('recipe_ingredient', function($table)
        {
            $table->dropForeign('recipe_ingredient_recipe_id_foreign');
            $table->dropForeign('recipe_ingredient_ingredient_id_foreign');
        });
        Schema::drop('recipe_ingredient');
    }
}
