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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentName');
            $table->string('studentRegistation');
            $table->string('studentFatherName');
            $table->string('studentMotherName');
            $table->string('studentPhone');
            $table->string('studentAddress');
            $table->string('studentDepartment');
            $table->text('studentImage');
            $table->unsignedInteger('batch')->default(1);
            $table->unsignedBigInteger( 'approve_by')->nullable();
            $table->enum( 'status',['pending','approved','declined'])->default('pending');
            $table->dateTime( 'approve_date')->nullable();
            $table->timestamps();

            $table->foreign( 'approve_by')->on('admins')->references( 'id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
