<?php

namespace App\Commands;

class CreatePostCommand
{
    public function __construct(
        private readonly int $authorId,
        private readonly string $title,
        private readonly string $content,
    ) {
    }

    public function getAuthorId(): int
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
