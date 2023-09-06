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
        Schema::create('user_skill_competency', function (Blueprint $table) {
            $table->id();

            $table->integer('years_of_experience');

            $table->foreignId('user_id')                                
                ->references('id')
                ->on('users');

            $table->foreignId('skill_id')
                ->references('id')
                ->on('skills');

            $table->foreignId('competency_id')
                ->references('id')
                ->on('competencies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_skill_competency');
    }
};
