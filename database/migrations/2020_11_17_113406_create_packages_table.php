<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_title');
            $table->string('package_sub_title');
            $table->integer('package_price');
            $table->string('package_domains');
            $table->string('package_emails');
            $table->string('package_hosting');
            $table->string('package_design');
            $table->string('package_pages');
            $table->string('package_slider');
            $table->string('package_seo');
            $table->string('package_time');
            $table->string('package_fees');
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
        Schema::dropIfExists('packages');
    }
}
