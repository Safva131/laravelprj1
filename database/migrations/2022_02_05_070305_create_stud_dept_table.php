<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_dept', function (Blueprint $table) {

            $table->id();
            $table->string('student_name',100);
            $table->string('student_place',100);
            $table->bigInteger('student_contact');
            $table->unsignedBigInteger('dept_id');

            $table->foreign('dept_id')->references('id')->on('department');
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
        Schema::dropIfExists('stud_dept');
    }
}
