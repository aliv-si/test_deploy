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
        Schema::create('question_banks', function (Blueprint $table) {
            $table->id('id_soal');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('subject', 255);
            $table->integer('semester');
            $table->enum('category', ['uts', 'uas']);
            $table->string('file_path_soal', 255);
            $table->timestamp('tanggal_upload')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_banks');
    }
};