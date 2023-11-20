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
        Schema::create('room_detail', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('room_id')->references('id')->on('room')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('amount')->default(0);
            $table->foreignUuid('ugd_payment_id')->references('id')->on('ugd_payment')->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('sub_total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_detail');
    }
};
