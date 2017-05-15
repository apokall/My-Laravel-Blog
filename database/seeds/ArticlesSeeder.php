<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Article::create(
        [
        'postTitle' => 'Blog title',
        'text' => 'Some text',
        'img' => 'blogPicture.jpg',
        ]
      );
    }
}
