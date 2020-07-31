<?php
use Faker\Factory as Faker;
class LessonTableSeeder extends Seeder{
    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach (range(1,10) as $item) {
            Lesson::create([

            ]);
        }
    }
}
