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
        Schema::create('locals_specification', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('local_id');
            $table->foreign('local_id')->references('id')->on('locals');

            $table->unsignedBigInteger('specification_id');
            $table->foreign('specification_id')->references('id')->on('specifications');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals_specification');
    }
};
