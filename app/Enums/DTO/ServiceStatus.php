<?php

namespace App\Enums\DTO;

enum ServiceStatus: string
{
    case enabled = 'enabled';
    case disabled = 'disabled';
    case archived = 'archived';
}
