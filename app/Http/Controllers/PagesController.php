<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "WELCOME TO GHOST.LY App";
      // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
      $title = 'About';
      return view('pages.about')->with('title',$title);
    }
    public function courses(){
        $data = array(
          'title' => 'Courses',
          'services' => ['Web design', 'Programming','Hacking']
        );
      return view('pages.courses')->with($data);
    }
    public function contact(){
    $title = 'Contact-Us';
      return view('pages.contact')->with('title',$title);
    }
}
