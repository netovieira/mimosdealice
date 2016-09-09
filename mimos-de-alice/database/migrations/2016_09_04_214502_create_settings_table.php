<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 40);
            $table->string('favicon');
            $table->integer('address_id',false,true);
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('settings_id',false,true);
            $table->string('type', 40);
            $table->string('name');
            $table->string('value');
            $table->string('icon');
            $table->string('target');
            $table->timestamps();

            $table->foreign('settings_id')
                ->references('id')->on('settings')
                ->onDelete('cascade');
        });

        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('settings_id',false,true);
            $table->string('name',30);
            $table->string('path');
            $table->timestamps();

            $table->foreign('settings_id')
                ->references('id')->on('settings')
                ->onDelete('cascade');
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('settings_id',false,true);
            $table->string('title', 40);
            $table->string('name');
            $table->string('link');
            $table->string('target');
            $table->timestamps();

            $table->foreign('settings_id')
                ->references('id')->on('settings')
                ->onDelete('cascade');
        });

        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('settings_id',false,true);
            $table->string('title', 40);
            $table->string('name',120);
            $table->string('description');
            $table->string('picture');
            $table->timestamps();

            $table->foreign('settings_id')
                ->references('id')->on('settings')
                ->onDelete('cascade');
        });

        Schema::create('meta_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('settings_id',false,true);
            $table->text('html');
            $table->timestamps();

            $table->foreign('settings_id')
                ->references('id')->on('settings')
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
        Schema::table('contacts', function($table)
        {
            $table->dropForeign('contacts_settings_id_foreign');
        });
        Schema::table('sections', function($table)
        {
            $table->dropForeign('sections_settings_id_foreign');
        });
        Schema::table('pages', function($table)
        {
            $table->dropForeign('pages_settings_id_foreign');
        });
        Schema::table('workers', function($table)
        {
            $table->dropForeign('workers_settings_id_foreign');
        });
        Schema::table('meta_tags', function($table)
        {
            $table->dropForeign('meta_tags_settings_id_foreign');
        });

        Schema::dropIfExists('settings');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('workers');
        Schema::dropIfExists('meta_tags');
    }
}
