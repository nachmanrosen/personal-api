<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ExperienceSeeder::class);
        // $this->call(SkillsSeeder::class);
         $this->call(UpdateSeeder::class);
        // $this->call(InstitutionSeeder::class);

    }
}
