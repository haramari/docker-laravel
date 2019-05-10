<?php

use Illuminate\Database\Seeder;

use App\Post;
use App\Category;
use App\Comment;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $content = 'Everything happening around me is very random. I am enjoying the phase, as the journey is far more enjoyable than the destination.';

      $commentdammy = 'Always look on the bright side of life!';

      for($i = 1; $i <= 10; $i++){
        $post = new Post;
        $post->title = "This is No.$i article.";
        $post->content = $content;
        $post->category_id = 1;
        $post->comment_count =1;
        $post->save();

        $maxComments = mt_rand(3, 15);
        for ($j=0; $j <= $maxComments; $j++){
          $comment = new Comment;
          $comment->commenter = 'test user';
          $comment->comment = $commentdammy;
          $post->comments()->save($comment);
          $post->increment('comment_count');
        }
      }

    $cat1 = new Category;
    $cat1->name = "Category1";
    $cat1->save();

    $cat2 = new Category;
    $cat2->name = "Category2";
    $cat2->save();
    }
}
