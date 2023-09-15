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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('full_name', 50);
            $table->string('email')->unique();
            $table->string('phone_number', 15);
            $table->string('fb');
            $table->string('ins');
            $table->string('linkedin');
            $table->string('web');
            $table->string('address');
            $table->string('description');
            $table->string('skills')->nullable();
            $table->string('cv');
            $table->text('content');
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
