<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to my app ilan';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'this is the about page';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => [
                'front end',
                'backend',
                'none'
            ]);
        return view('pages.services')->with($data);
    }
}
