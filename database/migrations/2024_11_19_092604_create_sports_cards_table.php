<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sports_cards', function (Blueprint $table) {
            $table->id();
            $table->string('sports_type');
            $table->string('team1_name');
            $table->string('team2_name');
            $table->string('team1_score');
            $table->string('team2_score');
            $table->string('team1_logo');
            $table->string('team2_logo');
            $table->string('winner');
            $table->date('play_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports_cards');
    }
};