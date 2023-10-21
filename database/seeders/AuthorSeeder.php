<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author; // Assurez-vous d'importer le modèle Author avec le bon namespace

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(2)->create();
    }
}