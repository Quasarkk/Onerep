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
        return Inertia::render('Onerep/Programs', compact('programs'));
    }

    public function show(Program $program)
    {
        $program->load('trainings', 'trainings.exercises.sets');
        return Inertia::render('Onerep/Program_details', compact('program'));
    }

    public function update (Request $request, Program $program)
    {
        $valid_data = Validator::make($request->all(), [
            'status' => ['required']
        ])->validate();

        $program->update($valid_data);

        if ($request->status==='current')
        {
            $programs=Program::all()->except($program->id);
            foreach($programs as $program)
            {
                $program->status='inactive';
                $program->save();
            }
        }

        session()->flash('flash.banner', 'Program successfully modified');
    }

    public function store(Request $request)
    {
        $valid_data = Validator::make($request->all(), [
            'name' => ['required'],
            'begin_date' => ['nullable'],
            'end_date' => ['nullable'],
            'user_id' => ['nullable'],
            'status' => ['required'],
        ])->validate();

        $valid_data['user_id'] = auth()->user()->id;

        Program::create($valid_data);

        session()->flash('flash.banner', 'Program successfully created');
        session()->flash('flash.bannerStyle', 'success');
    }

}
