<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	protected $fillable = [
		'name','email','nationality'];

		//One author to many book

	public function book()
	{
		return $this->hasMany(Book::class);
	}
}