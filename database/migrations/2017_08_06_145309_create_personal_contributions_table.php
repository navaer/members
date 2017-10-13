<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->boolean('job_reference')->default('0');
            $table->boolean('fill_forms')->default('0');
            $table->boolean('teach_workshops')->default('0');
            $table->boolean('educational_resources')->default('0');
            $table->boolean('interview_practices')->default('0');
            $table->boolean('teach_it')->default('0');
            $table->boolean('career_coach')->default('0');
            $table->boolean('babysitting')->default('0');
            $table->boolean('fill_resume')->default('0');
            $table->boolean('professional_advisement')->default('0');
            $table->boolean('pef_coach')->default('0');
            $table->boolean('transportation')->default('0');
            $table->string('others')->default('0');
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
        Schema::dropIfExists('personal_contributions');
    }
}
