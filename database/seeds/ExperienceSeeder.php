<?php

use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   DB::table('experiences')->insert([
        'jobTitle' => ('Web Developer'),
        'employer' => ('Holiday Labels'),
        'date' =>('July -November 2017'),
    ]);
        DB::table('experiences')->insert([
            'jobTitle' => ('SQL Developer'),
            'employer' => ('Kids and Family'),
            'date' =>('April and May 2018'),
        ]);
        DB::table('experiences')->insert([
            'jobTitle' => ('Intern'),
            'employer' => ('Bitbeans'),
            'date' =>('2018'),
        ]);
       
    }
}
