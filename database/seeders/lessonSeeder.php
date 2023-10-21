<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson; // Importez la classe Lesson ici

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::factory(10)->create();
    }
}
