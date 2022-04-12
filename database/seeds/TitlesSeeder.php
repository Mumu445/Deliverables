<?php

use Illuminate\Database\Seeder;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            'name' => Str::random(20),
            'author' => Str::random(20),
            'drawer' => Str::random(20),
            'magazine' => Str::random(20)
        ]);
    }
}
