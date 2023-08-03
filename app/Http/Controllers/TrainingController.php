<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Training;
use App\Models\Exercise;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();
        return Inertia::render('Onerep/Trainings', compact('trainings'));
    }

    public function show(Training $training)
    {
        $training->load('exercises', 'exercises.sets');
        $exercises = Exercise::all();
        return Inertia::render('Onerep/Training_details', compact('training', 'exercises'));
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required'],
            'number' => ['nullable'],
            'date' => ['nullable'],
            'muscles' => ['nullable'],
        ])->validate();

        $valid_data['user_id'] = auth()->user()->id;
        // Si le paramètre program_id est présent dans la requête, utilisez-le
        if ($request->has('program_id')) {
            $valid_data['program_id'] = $request->input('program_id');
        }

        Training::create($valid_data);
        // return redirect()->route('programs.index');
    }

    public function addSet(Training $training, Exercise $exercise)
    {
        // Augmentez le nombre de séries pour l'exercice
        $exercise->increment('sets_number');

        return redirect()->back(); // Ou renvoyez une réponse JSON si nécessaire
    }
}
