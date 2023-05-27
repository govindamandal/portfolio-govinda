<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SkillController extends Controller
{
    /**
     * @return Response
     */
    public function index(Request $request) {
        return 'Skills';
    }

    /**
     * @return Response
     */
    public function create(Request $request) {
        return 'Skills';
    }
}
