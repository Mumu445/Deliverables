<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(20),
            'email' => Str::random(10).'@gmail.com',
            'image' => Str::random(100),
            'comment' => Str::random(50)
        ]);
    }
}
