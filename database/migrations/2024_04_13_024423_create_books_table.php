<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title', 100);
        $table->string('author', 100);
        $table->string('isbn', 20);
        $table->integer('published_year');
        $table->string('genre', 50);
        $table->boolean('availability')->default(true);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
