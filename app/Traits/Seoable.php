<?php

namespace App\Traits;

use App\Models\WEDOAPP\Seo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait Seoable
{
    public function seo(): MorphOne
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
