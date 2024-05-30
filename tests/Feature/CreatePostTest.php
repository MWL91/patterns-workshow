<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Viewer;
use App\Notifications\PostCreated;
use App\Notifications\ViewerPostPublished;
use App\WrongExamples\CreatePostWrongExample;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

describe('We can create posts', function () {
    uses(TestCase::class);

    it('creates a post', function () {
        // Given:
        Notification::fake();
        $user = User::factory()->create();
        $this->actingAs($user);
        Viewer::factory()->create(['user_id' => $user->id, 'watcher_id' => User::factory()->create()->id]);

        // When:
        app(CreatePostWrongExample::class)();

        // Then:
        $this->assertDatabaseHas('posts', [
            'title' => 'Title',
            'content' => 'Content',
        ]);
        Notification::assertSentTo(Auth::user(), PostCreated::class);
        Notification::assertSentTo(Auth::user()->viewers, ViewerPostPublished::class);
    });
});
