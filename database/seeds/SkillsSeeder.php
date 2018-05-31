<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill_categories')->insert([
            'category' => ('Databases'),
            'skills' => ('MySQL, MS Access, SQL Server'), 
        ]);
        DB::table('skill_categories')->insert([
            'category' => ('Languages'),
            'skills' => ('Java, SQL, HTML, CSS, PHP, JavaScript, JQuery '), 
        ]);
        DB::table('skill_categories')->insert([
            'category' => ('Frameworks'),
            'skills' => ('Angular 5, React, Laravel'), 
        ]);
    }
}
