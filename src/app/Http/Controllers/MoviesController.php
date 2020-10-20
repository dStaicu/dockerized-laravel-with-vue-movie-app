<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
	public function index(){

	    return view('movies');
	}

	public function listMovies(){

		return $movies = Movie::all()
			->where('rating', '>', 5)
			->where('status', '=', 1)
			->toJson();

	}

	public function deleteMovie($id){
		$movie = Movie::find($id);

		$movie->delete();

		die(json_encode(['success' => true]));
	}

	public function addMovie(Request $request){

		if(
			empty($request['name']) || 
			empty($request['rating']) ||
			empty($request['description']) ||
			empty($request['image'])
		){

	    	return redirect('/')->with('status', 'Date inconsistente!');
		}

		$movie = new Movie();

		$movie->name = $request['name'];
		$movie->rating = $request['rating'];
		$movie->description = $request['description'];
		$movie->image = $request['image'];
		$movie->save();

	    return redirect('/');

	}
}
