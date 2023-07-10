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
        $programs = Program::all();
        return Inertia::render('Programs', compact('programs'));
    }
}
