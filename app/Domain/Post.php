<?php

namespace App\Domain;

use App\Models\IPost;
use App\Notifications\PostCreated;
use App\Services\INotificationService;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

class Post implements IPost
{
    private int $id;

    public function __construct(
        private readonly int $authorId,
        private string $title,
        private string $content,
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

    public function notify(
        INotificationService $notificationService,
        Collection $users
    ): void
    {
        $notificationService->postCreated($this->authorId, $this);
        $notificationService->postPublished($users, $this);
    }

    public function getKey()
    {
        return $this->id;
    }
}
