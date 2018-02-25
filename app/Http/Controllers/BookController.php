<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use DB;

/**
* 
*/
class BookController extends Controller

{
	public function allBook()
	{
		// $books = DB::table('books')
  //           ->join('authors', 'authors.id', '=', 'books.author_id')
  //           ->select()
  //           ->get();
		// return response()->json(Pegawai::all());
		// return response()->json($books);
		return response()->json(Book::all());
	}

	public function Book($id)
	{
		return response()->json(Book::find($id));
	}

	public function createBook(Request $request)
	{
		$book = Book::all();
		return Book::create($request->all());
	}

	public function updateBook($id, Request $request)
	{
		$book = Book::find($id);
		$book->update($request->all());

		return response()->json($book, 200);
	}

	public function deleteBook($id)
	{
		Book::find($id)->delete();
		return response('Book deleted', 200);
	}
}