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
        Schema::create('ugd_action', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('qty')->default(0);
            $table->bigInteger('price')->default(0);
            $table->bigInteger('sub_total')->default(0);
            $table->foreignUuid('ugd_payment_id')->references('id')->on('ugd_payment')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugd_action');
    }
};
