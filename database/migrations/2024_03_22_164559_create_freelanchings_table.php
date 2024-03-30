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
        Schema::create('freelanchings', function (Blueprint $table) {
            $table->id();
            $table->string('fre_title_one');
            $table->string('fre_title_two');
            $table->string('fre_title_three');
            $table->text('fre_description');
            $table->string('fre_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelanchings');
    }
};
