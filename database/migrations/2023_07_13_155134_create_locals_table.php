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
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('direction');
            $table->string('url');
            $table->string('phone');
            $table->string('schedule');
            $table->string('type');
            $table->integer('rating')->nullable();
            $table->string('image');

            // $table->unsignedBigInteger('local_specifications_id');
            // $table->foreign('local_specifications_id')->references('id')->on('local_specifications');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locals');
    }
};
