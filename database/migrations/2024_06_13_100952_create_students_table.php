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
            $table->integerIncrements('id');
            $table->unsignedInteger('type_id');
            $table->string('name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->foreign('type_id')->references('Id')->on('types')->onDelete('cascade');
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
