<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('national_id')->unique();
        $table->string('name');
        $table->date('date_of_birth');
        $table->string('phone_number');
        $table->string('email')->unique();
        $table->string('address');
        $table->enum('role', ['admin', 'student', 'trainer']);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
