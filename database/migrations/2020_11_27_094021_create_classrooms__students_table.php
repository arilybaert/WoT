<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms__students', function (Blueprint $table) {
            $table->id();
            $table->date('scan_date');
            $table->time('scan_time');
            $table->boolean('notified');
            $table->string('student_id', 50);
            $table->foreign('student_id')->references('nfc_id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('classroom_id')->references('id')->on('classrooms');

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
        Schema::dropIfExists('classrooms__students');
    }
}
