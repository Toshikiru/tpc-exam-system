<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('instructions');
            $table->integer('time_limit')->default(60); // minutes
            $table->integer('passing_score')->default(75);
            $table->dateTime('schedule')->nullable();
            $table->integer('max_attempts')->default(1);
            $table->boolean('is_active')->default(true);
            $table->string('access_code')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('exams');
    }
};