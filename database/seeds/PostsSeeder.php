<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'titles' => Str::random(20),
            'body' => Str::random(100),
            'episode' => Str::random(100),
            'image' => Str::random(20)
        ]);
    }
}
