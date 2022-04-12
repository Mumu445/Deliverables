<?php

use Illuminate\Database\Seeder;

class HashtagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hashtags')->insert([
            'titles' => Str::random(20),
            'name' => Str::random(10),
        ]);
    }
}
