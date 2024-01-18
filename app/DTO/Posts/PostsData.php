<?php


use App\Enums\DTO\PostStatus;
use Carbon\CarbonImmutable;
use Spatie\LaravelData\Data;

class PostsData extends Data
{
    public function __construct(
        public string $name,
        public string $content,
        public PostStatus $status,

    ) {
    }
}
