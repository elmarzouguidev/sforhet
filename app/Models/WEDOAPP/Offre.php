<?php

declare(strict_types=1);

namespace App\Models\WEDOAPP;

use App\Traits\GetModelByKeyName;
use App\Traits\HasSlug;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use GetModelByKeyName;
    use HasFactory;
    use HasSlug;
    use UuidGenerator;

    /**
     * @var string[]|array<int,string>
     */
    protected $fillable = [
        'uuid',

        'is_active',
    ];

    /**
     * @var string[]|array<int,string>
     */
    protected $casts = [
        'is_active' => 'boolean',
        'offre_date' => 'date',
    ];

    protected $slugName = 'title';
    // Relationships

    // Helper Methods
}
