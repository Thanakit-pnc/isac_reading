<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Student;
use DB;
use File;
use Route;
use Exception;

class HomeController extends Controller
{

    public function index() {

        $views = File::allFiles(resource_path('views\ielts'));

        $collection = collect($views);
        
        $buttons = $collection->filter(function ($value, $key) {
            return $value->getFilename() != 'index.blade.php';
        })->chunk(5);

        return view('home', ['buttons' => $buttons->all()]);
    }

    public function pdf($level, $fileName) {
        
        $title = ucwords(str_replace('-', ' ', $fileName));
        $pdfURL = "public/assets/pdf/".$level."/".$fileName.'.pdf#toolbar=0';

        $pdf = ['title' => $title, 'url' => $pdfURL];

        return view('pdf', compact('pdf'));
    }
 
}
