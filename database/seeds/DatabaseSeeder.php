<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('questions')->insert(['description' => 'what did you eat for breakfast today']);
        DB::table('questions')->insert(['description' => 'what did you do today']);
        DB::table('questions')->insert(['description' => 'how do you feel today']);
        DB::table('options')->insert(['text' => 'nothing', 'question_id' => 1]);
        DB::table('options')->insert(['text' => 'cereal', 'question_id' => 1]);
        DB::table('options')->insert(['text' => 'waffle', 'question_id' => 1]);
        DB::table('options')->insert(['text' => 'went for a run/walk', 'question_id' => 2]);
        DB::table('options')->insert(['text' => 'watch tv', 'question_id' => 2]);
        DB::table('options')->insert(['text' => 'socialized', 'question_id' => 2]);
        DB::table('options')->insert(['text' => 'Great', 'question_id' => 3]);
        DB::table('options')->insert(['text' => 'ok', 'question_id' => 3]);
        DB::table('options')->insert(['text' => 'could be better', 'question_id' => 3]);

    }
}
