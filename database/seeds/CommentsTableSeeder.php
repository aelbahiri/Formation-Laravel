<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     $posts = App\Post::all();

     if($posts->count() == 0){
         $this->command->info("Please create some posts !");
         return;
     }

     $numberComments = (int)$this->command->ask("How many of comment you want generate ?", 10);

      factory(App\Comment::class, $numberComments)->make()->each(function($comment) use ($posts) {
            $comment->post_id = $posts->random()->id ;
            $comment->save();
        });
        
    }
}
