<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Student;
use App\IELTSTopic;
use DB;
use File;
use Route;


class HomeController extends Controller
{

    public function index() {

        $views = IELTSTopic::topics();

        $collection = collect($views);
        
        $buttons = $collection->chunk(10);

        $no_highlight = 'no';

        return view('home', ['buttons' => $buttons->all(), 'no_highlight' => $no_highlight]);
    }

    public function pdf($level, $fileName) {
        
        $title = ucwords(str_replace('-', ' ', $fileName));
        $pdfURL = "public/assets/pdf/".$level."/".$fileName.'.pdf#toolbar=0';

        $pdf = ['title' => $title, 'url' => $pdfURL];

        return view('pdf', compact('pdf'));
    }
 
}
