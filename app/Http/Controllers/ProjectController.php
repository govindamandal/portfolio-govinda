<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * @return Response
     */
    public function index(Request $request) {
        return 'Project';
    }

    /**
     * @return Response
     */
    public function create(Request $request) {
        return 'Project';
    }
}
