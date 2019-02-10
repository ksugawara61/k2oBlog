<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function __construct() {

    }

    public function index(Request $reqeust) {
        $params = [
            'title' => 'tool'
        ];

        return view('tool', $params);
    }
}
