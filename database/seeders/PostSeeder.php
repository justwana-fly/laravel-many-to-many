<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $categories = Category::pluck('id');
        $users = User::pluck('id');
        for ($i = 0; $i < 10; $i++) {
            $shuffledCategories = $categories->shuffle();
            $shuffledUsers = $users->shuffle();
            $newPost = new Post();
            $newPost->title = $faker->sentence();
            $newPost->content = $faker->text();
            $newPost->slug = Post::generateSlug($newPost->title);
            //$newPost->image = PostSeeder::storeimage('https://picsum.photos/200/300?random=1');
            $newPost->user_id = $shuffledUsers[0]->id;
            $newPost->category_id = $shuffledCategories[0]->id;
            $newPost->save();
        }
    }

    // public static function storeimage($img){
    //     $url = 'https:'.$img;
    //     $contents = file_get_contents($url);
    //     $temp_name = substr($url, strrpos($url, '/') + 1);
    //     $name = substr($temp_name, 0, strpos($temp_name, '?')) .'.jpg';
    //     $path = 'images/' . $name;
    //     Storage::put('images/'.$name, $contents);
    //     return $path;
    // }
}
