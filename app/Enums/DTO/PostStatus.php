<?php

namespace App\Enums\DTO;

enum PostStatus: string
{
    case enabled = 'enabled';
    case disabled = 'disabled';
    case archived = 'archived';
}
