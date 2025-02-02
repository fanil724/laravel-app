<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Categories
{
    private array $categories = [
        1 => [
            'id' => 1,
            'title' => 'News',

        ],
        2 => [
            'id' => 2,
            'title' => 'Politics',

        ],
        3 => [
            'id' => 3,
            'title' => 'Sport',

        ],
        4 => [
            'id' => 4,
            'title' => 'Бизнес',

        ],
        5 => [
            'id' => 5,
            'title' => 'ИСскуство',

        ],

    ];


    public function getCategories(): array
    {
        return $this->categories;
    }

    public function getCategory(string $id): array
    {
        if ((int)$id >= 0 && (int)$id < count($this->categories)) {
            return $this->categories[$id];
        }
        return [];
    }
}
