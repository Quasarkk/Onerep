<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Training;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();
        return Inertia::render('Trainings', compact('trainings'));
    }
}
