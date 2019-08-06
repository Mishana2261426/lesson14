<?php

namespace App\Http\Controllers;

use App\Author;

class AuthorsController extends Controller
{
    
	public function addPage() {
		return view('authors.add');
	}

	public function store() {

		$data = request()->all();
		
		$model = new Author();
		$model->fill($data);
		$model->save();

		return redirect('/authors');
	}
}
