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
        Schema::table('users', function (Blueprint $table) {
           $table->enum('role',['user','admin'])->nullable()->default('user')->after('password');
           $table->string('phone')->nullable()->after('role');
           $table->string('photo')->nullable()->after('phone');
           $table->text('address')->nullable()->after('photo');
           $table->enum('subscription_status',['active','end','cancelled','inactive'])->nullable()->default('inactive')->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('phone');
            $table->dropColumn('photo');
            $table->dropColumn('address');
            $table->dropColumn('subscription_status');
        });
    }
};