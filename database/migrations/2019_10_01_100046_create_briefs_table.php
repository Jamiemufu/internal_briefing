<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('brief_date');
            $table->string('client_name');
            $table->string('brief_in_by');
            $table->string('client_email');
            $table->string('job_number');
            $table->string('campaign_name');
            $table->string('budget');
            $table->string('budget_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('questions_sent')->default('no');
            $table->string('estimate_approved')->default('no');
            $table->string('comments')->nullable();
            $table->string('value')->nullable();

            
            $table->unsignedBigInteger('ppc_id')->nullable();
            $table->unsignedBigInteger('social_id')->nullable();

            $table->foreign('ppc_id')->references('id')->on('p_p_c_s');
            $table->foreign('social_id')->references('id')->on('socials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('briefs');
    }
}
