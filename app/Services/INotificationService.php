<?php

namespace App\Services;

use App\Models\IPost;

interface INotificationService
{

    public function postCreated(int $userId, IPost $post): void;
    public function postPublished(int $userId, IPost $post): void;
}
