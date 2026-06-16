<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('student_id')->unique();
            $table->string('full_name');
            $table->enum('sex', ['Male', 'Female']);
            $table->date('date_of_birth');
            $table->text('address');
            $table->string('contact_number');
            $table->string('guardian_name');
            $table->string('guardian_contact_number');
            $table->string('course');
            $table->string('year_level');
            $table->enum('admission_status', ['Pending', 'Passed', 'Conditional', 'Failed'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('student_profiles');
    }
};