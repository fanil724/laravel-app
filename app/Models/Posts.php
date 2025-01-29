<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Posts
{
    private array $posts = [
        1 => [
            'id' => 1,
            'slug' => 'firt_post_2025_21_12',
            'title' => 'First post',
            'text' => 'This is post 1',
        ],
        2 => [
            'id' => 2,
            'slug' => 'second_post_2025_29_01',
            'title' => 'First post2',
            'text' => 'This is post 2',
        ],
        3 => [
            'id' => 3,
            'slug' => 'three_post_2025_29_01',
            'title' => 'First post2',
            'text' => 'This is post 2',
        ],
        4 => [
            'id' => 4,
            'slug' => 'four_post_2025_29_01',
            'title' => 'First post2',
            'text' => 'This is post 2',
        ],
        5 => [
            'id' => 5,
            'slug' => 'five_post_2025_29_01',
            'title' => 'First post2',
            'text' => 'This is post 2',
        ],

    ];


    public function getPosts(): array
    {
        return $this->posts;
    }

    public function getPost(string $id): array
    {
        $key = array_search($id, array_column($this->posts, 'slug'));

        if ($this->posts[$key + 1]['slug'] !== $id) {
            return [];
        }
        $key += 1;
        return $this->posts[$key];
    }
}
