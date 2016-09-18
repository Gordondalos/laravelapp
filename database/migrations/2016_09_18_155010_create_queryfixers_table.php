<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueryfixersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queryfixers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	        $table->string('client');
	        $table->timestamp('published_at');
	        $table->string('number');
	        $table->string('partner');
	        $table->string('shop');
	        $table->string('data_query');
	        $table->string('photos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('queryfixers');
    }
}
