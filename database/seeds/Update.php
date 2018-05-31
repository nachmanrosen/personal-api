<?php

use Illuminate\Database\Seeder;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'school' => ('YU'),
            'date' => ('2000-2003'),
            'subject' =>('History'),
        ]);

        DB::table('skill_categories')->insert([
            'category' => ('IDE'),
            'skills' => ('Netbeans, Visual Studio Code'), 
        ]);
    }
}
