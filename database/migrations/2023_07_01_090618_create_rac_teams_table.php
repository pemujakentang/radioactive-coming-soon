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
        Schema::create('rac_teams', function (Blueprint $table) {
            $table->id()->unique();
            $table->timestamps();
            $table->string('penyiar1');
            $table->string('penyiar2');
            $table->string('operator');
            $table->string('institusi');
            $table->string('nims1');
            $table->string('nims2');
            $table->string('nimop');
            $table->string('contact_wa');
            $table->string('contact_line');
            $table->string('payment_proof');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rac_teams');
    }
};
