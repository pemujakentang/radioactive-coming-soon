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
        Schema::create('bundle_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_1');
            $table->string('email_1')->unique();
            $table->string('phone_1');
            $table->string('name_2')->nullable();
            $table->string('email_2')->unique()->nullable();
            $table->string('phone_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('email_3')->unique()->nullable();
            $table->string('phone_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundle_orders');
    }
};
