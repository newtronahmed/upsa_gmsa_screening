<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->string('student_id')->unique();
            $table->string('department');
            $table->string('level');
            $table->string('contact');
            $table->string('path_no')->unique();

            // Test results
            $table->decimal('bp', 5, 2)->nullable();
            $table->decimal('weight', 5, 2)->nullable();
            $table->decimal('height', 5, 2)->nullable();
            $table->decimal('bmi', 5, 2)->nullable();

            // Phlebotomy
            $table->string('phlebotomist')->nullable();
            $table->timestamp('phlebotomy_time')->nullable();

            // Test results: Reactive or Non-reactive
            $table->string('hepatitis_b')->nullable();
            $table->string('h_pylori')->nullable();
            $table->string('vdrl')->nullable();

            // Blood grouping
            $table->string('blood_group')->nullable();

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
        Schema::dropIfExists('patients');
    }
};
