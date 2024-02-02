<?php

declare(strict_types=1);

namespace App\Models\WEDOAPP;

use App\Traits\GetModelByKeyName;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByKeyName;
    

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
