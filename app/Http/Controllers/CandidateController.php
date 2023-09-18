<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index () {
        return Candidate::all();
    }
    public function getCandidateById ($id) {

    }
}
