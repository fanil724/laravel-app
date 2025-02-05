<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Спорт',
            ],
            [
                'name' => 'Политика',
            ],
            [
                'name' => 'Новости',
            ],
             [
                'name' => 'Бизнес',
            ],
             [
                'name' => 'ИТ',
            ],



        ];
        DB::table('categories')->insert($categories);
    }
}
