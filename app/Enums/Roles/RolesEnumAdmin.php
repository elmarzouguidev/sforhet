<?php

namespace App\Enums\Roles;

enum RolesEnumAdmin: string
{

    case SUPER_ADMIN = 'SuperAdmin';
    case ADMIN = 'Admin';

    case DEVELOPER = 'Developer';
    // extra helper to allow for greater customization of displayed values, without disclosing the name/value data directly
    public function label(): string
    {
        return match ($this) {
            static::SUPER_ADMIN => 'Super Admin',
            static::ADMIN => 'Admin',
            static::DEVELOPER => 'Developer',
        };
    }

    public static function options()
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $type) => [
                $type->value => $type->label(),
            ])
            ->toArray();
    }
}
