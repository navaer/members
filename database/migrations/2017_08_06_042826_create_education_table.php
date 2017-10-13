<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->string('language_1')->nullable();
            $table->boolean('language_1_reed')->default('0');
            $table->boolean('language_1_speak')->default('0');
            $table->boolean('language_1_translate')->default('0');
            $table->boolean('language_1_write')->default('0');
            $table->string('language_2')->default('')->nullable();
            $table->boolean('language_2_reed')->default('0');
            $table->boolean('language_2_speak')->default('0');
            $table->boolean('language_2_translate')->default('0');
            $table->boolean('language_2_write')->default('0');
            $table->string('grade')->default('');
            $table->string('grade_type')->default('')->nullable();
            $table->string('applied_skills')->default('')->nullable();
            $table->string('it_knowledge')->default('')->nullable();
            $table->string('free_academic_institutions')->default('')->nullable();
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
        Schema::dropIfExists('education');
    }
}
