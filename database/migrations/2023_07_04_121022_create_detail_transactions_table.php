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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('header_transaction_id')->constrained('header_transactions');
            $table->foreignId('merch_id')->constrained('merches');
            $table->integer('qty');
            $table->bigInteger('total_price');
            $table->enum('status', ['Unpaid', 'Paid', 'Used', 'Canceled', 'Expired']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transactions');
    }
};
