<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryName = ['HTML', 'CSS', 'JS', 'PHP', 'MySQL', 'VueJS', 'Laravel'];

        foreach($categoryName as $name)
        {
            $category = new Category();

            $category->name = $name;
            $category->slug = Str::slug($name, '-');

            $category->save();
        }
    }
}
