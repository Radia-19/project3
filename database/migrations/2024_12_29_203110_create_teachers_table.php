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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacherName');
            $table->string('teacherRegistation');
            $table->string('teacherPhone');
            $table->string('teacherEmail');
            $table->string('teacherAddress');
            $table->string('teacherDepartment');
            $table->text('teacherImage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
