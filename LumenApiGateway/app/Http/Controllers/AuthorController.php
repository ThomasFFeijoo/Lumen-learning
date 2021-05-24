<?php

namespace App\Http\Controllers;

use App\Author;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $authorService;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return list of authors
     * @return Illuminate\Http\Response
     */
    public function index() {
    }

    /**
     * Create new author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {
    }

    /**
     * Obtain and show one author
     * @return Illuminate\Http\Response
     */
    public function show($author) {
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
