<?php

namespace Websanova\Demo\Seeds;

use Illuminate\Database\Seeder;

class WebsanovaDemoSeeder extends Seeder
{
    public function run()
    {
        \DB::table('websanova_demo_items')->insert([
        	'slug' => 'test',
        	'name' => 'Test',
        	'description' => 'My first item test.',
        	'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}