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
       /* DB::table('institutions')->insert([
            'school' => ('YU'),
            'date' => ('2000-2003'),
            'subject' =>('History'),
        ]);

        DB::table('skill_categories')->insert([
            'category' => ('IDE'),
            'skills' => ('Netbeans, Visual Studio Code'), 
        ]);
    }
    */
    DB::table('projects')->insert([
        'project' => ('Shopping Cart'),
        'description' => ('Stores each customers items in a database and displays their items in a shopping cart. '),
        'url' =>('www.suppergenerator/Labels.php'),
        'github code' =>('github.com/nachmanrosen/Projects/tree/ShoppingCart'),
        'skills used' =>('PHP, MySQL, HTML, CSS, Bootstrap'),
    ]);
    DB::table('projects')->insert([
        'project' => ('SupperGenerator'),
        'description' => ('User stores their own dinners and then the program randomly selects dinners for the week. The first version used Object Oriented Programming with Java.
        '),
        'url' =>('www.suppergenerator'),
        'github code' =>('github.com/nachmanrosen/Projects/tree/SupperGenerator
        '),
        'skills used' =>('PHP, MySQL, HTML, CSS, JavaScript, AJAX'),
    ])
    DB::table('projects')->insert([
        'project' => ('PersonalAPI'),
        'description' => ('Used Laravel to develop a RESTful Open API with standard JSON-API format. Used Swagger Editor to make OpenAPI Specifications '),
        'url' =>('www.nachmanapi.work/api/'),
        'github code' =>('github.com/nachmanrosen/personal-api'),
        'skills used' =>('Laravel, vagrant virtual machine, Swagger Editor'),
    ]);
}
