<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('About', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nickname');
            $table->string('fullname');
            $table->string('email');
            $table->string('homephone');
            $table->string('moblie');
            $table->string('address');
            $table->string('resumeUrl');
            $table->string('profileUrl');
            $table->json('listLinks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('About');
    }
};
