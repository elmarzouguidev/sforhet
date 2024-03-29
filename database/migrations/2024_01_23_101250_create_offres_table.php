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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->uuid()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->mediumText('content')->nullable();
            $table->longText('body')->nullable();
            $table->string('image')->nullable();
            $table->longText('svg')->nullable();

            $table->date('offre_date')->nullable();
            $table->string('offre_location')->nullable();
            $table->json('options')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
