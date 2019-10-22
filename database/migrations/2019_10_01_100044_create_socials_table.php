<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('social_type');
            $table->string('page_name');
            $table->string('cta');
            $table->string('ad_type');
            $table->string('url_destination');
            $table->string('targeting');
            $table->string('main_copy');
            $table->string('headline');
            $table->string('links');
            $table->string('assets');
            $table->string('objective');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socials');
    }
}
