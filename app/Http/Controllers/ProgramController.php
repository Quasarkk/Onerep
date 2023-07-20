<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Program;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('trainings')->with('trainings.exercises.sets')->get();
        return Inertia::render('Programs', compact('programs'));
    }

    public function show(Program $program)
    {
        $program->load('trainings', 'trainings.exercises.sets');
        return Inertia::render('Program_details', compact('program'));
    }
}
