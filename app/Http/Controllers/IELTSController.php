<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IELTSController extends Controller
{
    public function index(Request $request) {
        $slug = str_slug($request->title);
        $status = $request->button;

        if ($status == 'test') {
            $timer = 1;
        } else {
            $timer = 0;
        }
        
        $view = 'ielts.'.$slug;
        
        return view($view, ['timer' => $timer]);
    }

    // an environmental disaster
    public function store_exam1(Request $request) {
        dd($request->all());
    }

    // body piercing
    public function store_exam2(Request $request) {
        dd($request->all());
    }
}
