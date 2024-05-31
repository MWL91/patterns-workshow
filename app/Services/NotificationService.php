<?php

namespace App\Services;

use App\Models\IPost;
use App\Models\User;
use App\Notifications\PostCreated;
use App\Notifications\ViewerPostPublished;
use Illuminate\Support\Collection;
use Ramsey\Uuid\UuidInterface;

class NotificationService implements INotificationService
{
    public function postCreated(UuidInterface $userId, IPost $post): void
    {
        User::find($userId)->notify(new PostCreated($post));
    }

    public function postPublished(Collection $userIds, IPost $post): void
    {
        User::whereIn('id', $userIds)->each(
            fn ($viewer) => $viewer->notify(new ViewerPostPublished($post))
        );
    }
}
