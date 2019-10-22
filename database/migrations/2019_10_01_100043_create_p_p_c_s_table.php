<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePPCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_p_c_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('website_url');
            $table->string('url_destination');
            $table->string('ad_type');
            $table->string('number_of_ads');
            $table->string('analytics');
            $table->string('format');
            $table->string('objectives');
            $table->string('assets');
            $table->string('main_offer');
            $table->string('headline_1');
            $table->string('headline_2');
            $table->string('headline_3');
            $table->string('desc_1');
            $table->string('desc_2');
            $table->string('cta');
            $table->string('site_extensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_p_c_s');
    }
}
