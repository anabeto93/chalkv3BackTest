<?php

use App\Session;
use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'course_id' => 1,
            'title' => 'No folder for me',
            'content' => '<h1>Header</h1><p>Paragraph of content</p> <i>We\'ll figure out images later...',
            'enabled' => true
        ]);

        Session::create([
            'course_id' => 1,
            'folder_id' => 1,
            'title' => 'In a folder',
            'content' => '<h1>Header</h1><p>Paragraph of content</p> <i>We\'ll figure out images later...',
            'enabled' => true
        ]);

        Session::create([
            'course_id' => 1,
            'title' => 'Disabled session',
            'content' => '<h1>Header</h1><p>Paragraph of content</p> <i>We\'ll figure out images later...',
            'enabled' => false
        ]);

        Session::create([
            'course_id' => 1,
            'title' => 'Progression locked',
            'content' => '<h1>Header</h1><p>Paragraph of content</p> <i>We\'ll figure out images later...',
            'progression_lock' => true,
            'enabled' => true
        ]);

        Session::create([
            'course_id' => 2,
            'title' => 'Second course\'s session',
            'content' => '<h1>Header</h1><p>Paragraph of content</p> <i>We\'ll figure out images later...',
            'enabled' => true
        ]);
    }
}
