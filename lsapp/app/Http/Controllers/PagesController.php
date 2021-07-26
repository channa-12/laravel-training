<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // either can use compact or with
    public function index(){
        $title = 'Welcome to Laravel!';
        // $post = ;
        // return view ('pages.index', compact('title'));
        return view ('pages.index')-> with ('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view ('pages.about')-> with ('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        // return view('pages.services'); // this one no $title
        return view ('pages.services')-> with ($data);
    }
}
