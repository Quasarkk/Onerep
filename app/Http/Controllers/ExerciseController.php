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
        return Inertia::render('Onerep/Exercises', compact('exercises'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $test = Validator::make($request->all(), [
            'name' => ['required'],
            'type' => ['nullable'],
            'onerm' => ['nullable'],
            'muscles' => ['nullable'],
            'icon_url' => ['nullable'],
        ])->validate();

        $exercise->update($test);

        session()->flash('flash.banner', 'Exercise successfully modified');
        session()->flash('flash.bannerStyle', 'success');
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required'],
            'type' => ['nullable'],
            'onerm' => ['nullable'],
            'muscles' => ['nullable'],
            'icon_url' => ['nullable'],
        ])->validate();

        Exercise::create($valid_data);

        session()->flash('flash.banner', 'Exercise successfully created');
        session()->flash('flash.bannerStyle', 'success');
    }





}
