<?php

namespace App\Domain;

use App\Models\IPost;
use App\Services\INotificationService;
use App\Services\NotificationService;
use Illuminate\Support\Collection;
use Ramsey\Uuid\UuidInterface;

class Post implements IPost
{
    private UuidInterface $id;

    public function __construct(
        private readonly UuidInterface $authorId,
        private string $title,
        private string $content,
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

    public function notify(
        NotificationService $notificationService,
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
