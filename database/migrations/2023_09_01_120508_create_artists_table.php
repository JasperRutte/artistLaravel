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
            $table->id(); // This will create an auto-incrementing 'id' column.
            $table->text('naam');
            $table->text('bandleden');
            $table->text('genre');
            $table->text('platenmaatschappij');
            $table->timestamps(); // This will add 'created_at' and 'updated_at' columns.
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
