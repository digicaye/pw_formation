<?php

namespace App\Http\Controllers;

use App\Models\Lesson; // Assurez-vous que le chemin est correct
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $lessons = Lesson::all();
        return view('home', compact('lessons')); // Assurez-vous que 'lessons' est une chaîne
    }
}
