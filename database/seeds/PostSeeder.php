<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newPost = new Post();

            $newPost->title = $faker->words(4, true);
            $newPost->slug = Str::slug( $newPost->title ); 
            $newPost->content = $faker->paragraphs(4, true);

            $newPost->save();
        }
    }
}
