<?php

use Illuminate\Database\Seeder;
use App\story;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(story::class,70)->create();
    }
}
