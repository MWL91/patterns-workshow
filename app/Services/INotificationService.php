<?php

namespace App\Services;

use App\Models\IPost;
use Illuminate\Support\Collection;
use Ramsey\Uuid\UuidInterface;

interface INotificationService
{

    public function postCreated(UuidInterface $userId, IPost $post): void;
    public function postPublished(Collection $userIds, IPost $post): void;
}
