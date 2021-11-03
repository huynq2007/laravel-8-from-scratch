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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $user3 = User::factory()->create();

        $cat1 = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $cat2 = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $cat3 = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);

        $post1 = Post::create([
            'title' => 'The first post item',
            'slug' => 'the-first-post-item',
            'excerpt' => 'Lorem ipsum dolor sit amet, has nihil eloquentiam repudiandae i',
            'body' => '<p>Ornatus probatus persecuti te vim, admodum omnesque menandri vel ut. No antiopam expetendis ius, pro eros euripidis efficiantur id, an oratio postea qui. Sed an velit aeque, nec partem utroque luptatum an. An sit enim feugiat dissentiunt, his eius copiosae patrioque et. Nusquam voluptua disputationi ut pro.</p>',
            'category_id' => $cat1->id,
            'user_id' => $user1->id
        ]);


        $post2 = Post::create([
            'title' => 'The second post item',
            'slug' => 'the-second-post-item',
            'excerpt' => 'is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content',
            'body' => '<p>It\'s a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout</p>',
            'category_id' => $cat2->id,
            'user_id' => $user1->id
        ]);

        $post3 = Post::create([
            'title' => 'The third post item',
            'slug' => 'the-third-post-item',
            'excerpt' => 'In a professional context it often happens that private or corporate clients corder',
            'body' => '<p>publication to be made and presented with the actual content still not being ready. Think of a news blog that\'s filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content</p>',
            'category_id' => $cat3->id,
            'user_id' => $user2->id
        ]);

        $post4 = Post::create([
            'title' => 'The fourth post item',
            'slug' => 'the-fourth-post-item',
            'excerpt' => 'Most of its text is made up from sections 1.10.32–3 of Cicero',
            'body' => '<p>Most of its text is made up from sections 1.10.32–3 of Cicero\'s De finibus bonorum et malorum (On the Boundaries of Goods and Evils; finibus may also be translated as purposes).</p>',
            'category_id' => $cat2->id,
            'user_id' => $user3->id
        ]);
    }
}
