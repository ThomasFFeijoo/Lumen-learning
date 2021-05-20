<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
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
     * Return list of books
     * @return Illuminate\Http\Response
     */
    public function index() {

    }

    /**
     * Create new book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {

    }

    /**
     * Obtain and show one book
     * @return Illuminate\Http\Response
     */
    public function show($book) {

    }

    /**
     * Update an existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book) {

    }

    /**
     * Remove an existing book
     * @return Illuminate\Http\Response
     */
    public function destroy($book) {

    }
}