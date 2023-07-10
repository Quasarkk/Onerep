<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Exercise;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return Inertia::render('Exercises', compact('exercises'));
    }
}
