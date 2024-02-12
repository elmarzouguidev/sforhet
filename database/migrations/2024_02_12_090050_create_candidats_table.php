<?php

use App\Models\WEDOAPP\City;
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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->uuid()->nullable();
            
            $table->string('nom', 40);
            $table->string('prenom', 40);
            $table->string('telephone', 40)->nullable();
            $table->string('email')->nullable();
            $table->string('date_nissance', 50)->nullable();
            $table->longText('adresse')->nullable();
            $table->string('quartier')->nullable();
            $table->string('diplome')->nullable();
            $table->string('filiere')->nullable();
            $table->foreignIdFor(City::class)->index()->nullable()->constrained()->nullOnDelete();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
