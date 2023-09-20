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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->text('naam');
            $table->text('bandleden');
            $table->text('genre');
            $table->unsignedBigInteger('platenmaatschappij_id');
            $table->timestamps();
            $table->foreign('platenmaatschappij_id')->references('id')->on('platenmaatschappij');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
