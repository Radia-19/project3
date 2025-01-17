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
        Schema::table('courses', function (Blueprint $table) {
            $table->string('video')->nullable();            // For storing video file path
            $table->date('batch_start')->nullable();        // For Batch Start Date
            $table->date('admission_end')->nullable();      // For Admission End Date
            $table->string('live_class_time')->nullable();  // For Live Class Time
            $table->integer('live_classes')->nullable();    // Number of Live Classes
            $table->integer('projects')->nullable();        // Number of Projects
            $table->decimal('fee', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['video', 'batch_start', 'admission_end', 'live_class_time', 'live_classes', 'projects']);
        });
    }
};
