<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class SkillController extends Controller
{
    /**
     * @return Response
     */
    public function index(Request $request) {
        return Inertia::render('Skills/Index', []);
    }

    /**
     * @return Response
     */
    public function create(Request $request) {
        return 'Skills';
    }
}
