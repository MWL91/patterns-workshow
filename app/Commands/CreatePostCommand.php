<?php

namespace App\Commands;

use Ramsey\Uuid\UuidInterface;

class CreatePostCommand
{
    public function __construct(
        private readonly UuidInterface $authorId,
        private readonly string $title,
        private readonly string $content,
    ) {
    }

    public function getAuthorId(): UuidInterface
    {
        return $this->authorId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
