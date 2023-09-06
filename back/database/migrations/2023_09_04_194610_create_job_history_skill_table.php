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
        Schema::create('job_history_skill', function (Blueprint $table) {
            $table->id();

            $table->foreignId('job_history_id')                                
                ->references('id')
                ->on('job_history');

            $table->foreignId('skill_id')
                ->references('id')
                ->on('skills');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_history_skill');
    }
};
