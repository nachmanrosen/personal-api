<?php

use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'school' => ('BMG'),
            'date' => ('2004-2017'),
            'subject' =>('Talmud'),
        ]);
        DB::table('institutions')->insert([
            'school' => ('School of Evolving Technology'),
            'date' => ('2016-2018'),
            'subject' =>('Programming and Web Development'),
        ]);
        

        
    }
}
