<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        Log::channel('app')->info('Post created', ['post' => $post]);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        Log::channel('app')->info('Post update', ['post' => $post]);
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted($id): void
    {
        Log::channel('app')->info('Post delete', ['id' => $id]);
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
