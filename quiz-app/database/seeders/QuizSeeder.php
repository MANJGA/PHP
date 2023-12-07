<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            'title' => 'Example Quiz',
            'description' => 'This is an example quiz description.',
            'photo' => 'http://example.com/photo.jpg',
            'status' => 1, // Active
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
