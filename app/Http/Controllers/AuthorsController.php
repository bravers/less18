<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\StoreAuthorRequest;

class AuthorsController extends Controller
{
    public function store(StoreAuthorRequest $request)
    {
    	$data = $request -> all();
    	$model = new Author();
    	$model = fill($data);
    	$model -> save();

    	return response() -> json([
    		'success' = true
    	]);
    }
}
