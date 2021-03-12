<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('job_id');
            $table->longText('qualification');
            $table->longText('company');
            $table->longText('language');
            $table->longText('technical_experience');
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
        Schema::dropIfExists('jobdetails');
    }
}
