<?php

namespace App\WrongExamples;

use App\Commands\CreatePostCommand;
use App\Domain\Post;
use App\Repositories\UserRepository;
use App\Services\INotificationService;

class CreatePostBetterExample
{
    public function __construct(
        private INotificationService $notificationService,
        private UserRepository $userRepository
    )
    {
    }

    public function __invoke(CreatePostCommand $command): void
    {
        // Create post
        $post = new Post(
            $command->getAuthorId(),
            $command->getTitle(),
            $command->getContent()
        );

        $post->notify(
            $this->notificationService,
            $this->userRepository->getViewers($command->getAuthorId())
        );
    }
}
