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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('sports_type');
            $table->enum('news_type',['general', 'top','featured','transfer news'])->default('general');
            $table->text('headline');
            $table->text('sub_headline');
            $table->string('slug')->unique()->nullable();
            $table->longText('description');
            $table->dateTime('creation_period');
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};