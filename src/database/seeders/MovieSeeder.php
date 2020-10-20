<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('movies')->insert(
        	[
	        	[
	        		'status' => '1',
		            'name' => 'Space Force',
		            'rating' => '4',
		            'description' => 'Lorem Ipsum blah blah',
		            'image' => 'img/movies-images/space-force.jpg',
	        	],
	        	[
	        		'status' => '2',
		            'name' => 'Forest Gump',
		            'rating' => '8.8',
		            'description' => 'Something',
		            'image' => 'img/movies-images/forest-gump.jpg',
	        	],
	        	[
	        		'status' => '1',
		            'name' => 'Joker',
		            'rating' => '9',
		            'description' => 'Noice',
		            'image' => 'img/movies-images/joker.jpg',
	        	],
	        ],
    	);
    }
}
