<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_needs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->boolean('employment_search')->default('0');
            $table->boolean('increase_payment')->default('0');
            $table->boolean('environment')->default('0');
            $table->boolean('not_satisfied')->default('0');
            $table->boolean('improve_education')->default('0');
            $table->boolean('cv_training')->default('0');
            $table->boolean('start_business')->default('0');
            $table->boolean('improve_business')->default('0');
            $table->boolean('new_skills')->default('0');
            $table->boolean('job_loss')->default('0');
            $table->timestamps();

            $table->foreign('member_id')
                ->references('id')
                ->on('members')
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
        Schema::dropIfExists('professional_needs');
    }
}
