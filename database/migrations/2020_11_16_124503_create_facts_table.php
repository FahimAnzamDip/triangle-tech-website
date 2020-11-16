<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string('fact_icon1');
            $table->string('fact_name1');
            $table->integer('fact_count1');
            $table->string('fact_icon2');
            $table->string('fact_name2');
            $table->integer('fact_count2');
            $table->string('fact_icon3');
            $table->string('fact_name3');
            $table->integer('fact_count3');
            $table->string('fact_icon4');
            $table->string('fact_name4');
            $table->integer('fact_count4');
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
        Schema::dropIfExists('facts');
    }
}
