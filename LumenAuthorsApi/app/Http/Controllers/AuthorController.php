<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return list of authors
     * @return Illuminate\Http\Response
     */
    public function index() {
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    /**
     * Create new author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * Obtain and show one author
     * @return Illuminate\Http\Response
     */
    public function show($author) {
        $author = Author::findOrFail($author);

        return $this->successResponse($author);
    }

    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author) {

    }

    /**
     * Remove an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author) {

    }

    //
}