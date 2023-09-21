<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Cache;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.role:manager', ['only' => ['store']]);
    }
    public function index () {
        $result = Cache::get('candidates',function(){
            return Candidate::all();
        });
        return $result;
    }
    public function store (Request $request) {
        $candidate = new Candidate();
        $candidate->timestamps = false;
        $candidate->name = $request->name;
        $candidate->source = $request->source;
        $candidate->owner = $request->owner;
        $candidate->created_by = auth()->user()->id;
        $candidate->save();
        return $candidate;
    }
    public function getCandidateById ($id) {
        return Candidate::find($id);
    }
}
