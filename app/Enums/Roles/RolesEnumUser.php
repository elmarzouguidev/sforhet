<?php

namespace App\Enums\Roles;

enum RolesEnumUser: string
{
        // case NAMEINAPP = 'name-in-database';

    case SUPER_USER = 'SuperUser';

    // extra helper to allow for greater customization of displayed values, without disclosing the name/value data directly
    public function label(): string
    {
        return match ($this) {
            static::SUPER_USER => 'Super User',
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
