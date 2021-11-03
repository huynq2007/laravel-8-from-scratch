<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();

        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();
        $cat3 = Category::factory()->create();

        Post::factory(3)->create([
            'user_id' => $user1->id,
            'category_id' => $cat1->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user2->id,
            'category_id' => $cat2->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user3->id,
            'category_id' => $cat3->id
        ]);
    }
}
