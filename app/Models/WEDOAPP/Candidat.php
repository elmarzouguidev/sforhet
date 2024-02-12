<?php

declare(strict_types=1);

namespace App\Models\WEDOAPP;

use App\Traits\GetModelByKeyName;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;


    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'email',
        'date_nissance',
        'quartier',
        'diplome',
        'filiere',
        'city_id',

        'is_active',
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    // Helper Methods
}
