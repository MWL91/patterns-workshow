<?php

namespace App\WrongExamples;

use App\Models\Post;
use App\Notifications\PostCreated;
use App\Notifications\ViewerPostPublished;
use Illuminate\Support\Facades\Auth;

class CreatePostWrongExample
{
    public function __invoke(): void
    {
        // Create post
        $post = new Post();
        $post->title = 'Title';
        $post->content = 'Content';
        $post->save();

        Auth::user()->notify(new PostCreated($post));

        Auth::user()->viewers->each(
            fn ($viewer) => $viewer->notify(new ViewerPostPublished($post))
        );
    }
}
