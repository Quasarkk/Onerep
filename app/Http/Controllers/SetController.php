<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Set;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SetController extends Controller
{
    public function index()
    {
        $sets = Set::all();
        return Inertia::render('Onerep/Sets', compact('sets'));
    }
}
