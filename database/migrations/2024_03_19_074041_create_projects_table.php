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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title_one');
            $table->string('project_sub_title_one');
            $table->longText('project_desc_one');
            $table->string('project_photo_one');

            $table->string('project_title_two');
            $table->string('project_sub_title_two');
            $table->longText('project_desc_two');
            $table->string('project_photo_two');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
