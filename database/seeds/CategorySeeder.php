<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCategory = new Category();
        $newCategory->name = 'Cucina';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Sport';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Cinema';
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Musica';
        $newCategory->save();
    }
}
