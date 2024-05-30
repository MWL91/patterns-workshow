<?php

namespace App\Services;

use App\Models\IPost;
use App\Models\User;
use App\Models\Viewer;
use App\Notifications\PostCreated;
use App\Notifications\ViewerPostPublished;

class NotificationService implements INotificationService
{
    public function postCreated(int $userId, IPost $post): void
    {
        User::find($userId)->notify(new PostCreated($post));
    }

    public function postPublished(int $userId, IPost $post): void
    {
        Viewer::where('user_id', $userId)->each(
            fn ($viewer) => $viewer->notify(new ViewerPostPublished($post))
        );
    }
}
