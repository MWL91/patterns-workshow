<?php

namespace App\Services;

use App\Models\IPost;
use Illuminate\Support\Collection;

interface INotificationService
{

    public function postCreated(int $userId, IPost $post): void;
    public function postPublished(Collection $userIds, IPost $post): void;
}
