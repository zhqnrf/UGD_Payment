<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ugd_payment', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('patient_id')->references('id')->on('patient')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('umur')->nullable();
            $table->timestamp('start_treating')->default(Carbon::now());
            $table->timestamp('end_treating')->default(Carbon::now());
            $table->integer('days_treated')->default(0);
            $table->string('registration_number');
            $table->enum('status', ['tercetak', 'belum_tercetak']);
            $table->bigInteger('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugd_payment');
    }
};
