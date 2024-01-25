<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacherId')->constrained('teachers');
            $table->string('className');
            $table->tinyInteger('fromAge');
            $table->tinyInteger('toAge');
            $table->time('fromTime');
            $table->time('toTime');
            $table->tinyInteger('capacity');
            $table->tinyInteger('price');
            $table->boolean('active');
            $table->string('class_image',100);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
