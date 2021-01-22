<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
            ['name' => 'iPhone'],
            ['name' => 'iPad'],
            ['name' => 'Macbook'],
            ['name' => 'Apple Watch'],
        ];

        try {
            foreach ($cates as $cate) {
                Category::create($cate);
            }
        } catch (\Throwable $th) {

        }
    }
}
