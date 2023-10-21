<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function view(Author $author, Request $request)
    {
        return view('authors.view', ['author' => $author]); // Ajout du point-virgule à la fin de la déclaration
    }
}
