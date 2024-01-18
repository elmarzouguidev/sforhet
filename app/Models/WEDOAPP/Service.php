<?php

namespace App\Models\WEDOAPP;

use App\Traits\GetModelByKeyName;
use App\Traits\HasSlug;
use App\Traits\Seoable;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;
    use HasSlug;
    use Seoable;
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
    ];

    // Relationships

    // Helper Methods
}
