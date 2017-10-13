<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->boolean('employment_information')->default('0');
            $table->boolean('accounting')->default('0');
            $table->boolean('agriculture_administration')->default('0');
            $table->boolean('media')->default('0');
            $table->boolean('babysitting')->default('0');
            $table->boolean('construction')->default('0');
            $table->boolean('training')->default('0');
            $table->boolean('architecture')->default('0');
            $table->boolean('medical')->default('0');
            $table->boolean('restaurant')->default('0');
            $table->boolean('human_resources')->default('0');
            $table->boolean('IT')->default('0');
            $table->boolean('facility_maintenance')->default('0');
            $table->boolean('business_management')->default('0');
            $table->boolean('factory')->default('0');
            $table->boolean('government')->default('0');
            $table->boolean('sales')->default('0');
            $table->boolean('science')->default('0');
            $table->boolean('self_employment')->default('0');
            $table->boolean('transportation')->default('0');
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
        Schema::dropIfExists('employment_contributions');
    }
}
