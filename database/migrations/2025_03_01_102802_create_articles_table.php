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
        Schema::create('Articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->string('image',255);
            $table->text('resume')->nullable();
            $table->foreignId('categorie_id')->nullable()->constrained('categories');
            $table->longText('description');
            $table->longText('tags')->nullable();
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Articles');
    }
};
