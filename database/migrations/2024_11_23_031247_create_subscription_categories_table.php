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
        Schema::create('subscription_categories', function (Blueprint $table) {
            $table->id();
            $table->enum('package_name',['Monthly','For 3 Months','For 6 Months','Annually']);
            $table->enum('package_category',['Month','3 Months','6 Months','year']);
            $table->enum('package_duration',['30','90','180','365']);
            $table->longText('description');
            $table->string('rate');
            $table->string('package_saving')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_categories');
    }
};