<?php

namespace App\Http\Controllers;
use App\Models\Lesson;

use Illuminate\Http\Request; // Assurez-vous que cette ligne n'est pas commentée si vous utilisez la classe Request

class LessonController extends Controller
{
    public function view(Lesson $lesson, Request $request)
    {
        return view('lessons.view', ['lesson' => $lesson]); // Ajout du point-virgule à la fin de la déclaration
    }
}
