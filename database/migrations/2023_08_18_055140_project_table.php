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
        Schema::create('Project', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->json('description');
            $table->json('skills'); // Column to store an array of skills
            $table->string('image_url');
            $table->string('project_view_url')->nullable();
            $table->string('project_live_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Project');
    }
};
