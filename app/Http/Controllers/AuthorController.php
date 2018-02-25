<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

/**
* 
*/
class AuthorController extends Controller

{
	public function allAuthor()
	{
		return response()->json(Author::all());
	}

	public function Author($id)
	{
		return response()->json(Author::find($id));
	}

	public function createAuthor(Request $request)
	{
		$author = Author::all();
		return Author::create($request->all());
	}

	public function updateAuthor($id, Request $request)
	{
		$author = Author::find($id);
		$author->update($request->all());

		return response()->json($author, 200);
	}

	public function deleteAuthor($id)
	{
		Author::find($id)->delete();
		return response('Author deleted', 200);
	}
}