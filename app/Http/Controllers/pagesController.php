<?php

namespace FAREN\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $title="Welcome to Faren's page, dude";
        // return view('pages.index',compact('title')); //sama buat passing argument
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title="about faren";
        return view('pages.about')->with('title',$title);
    }
    public function service(){
        //$title="faren's service";
        $data=array(
            'title' => 'faren\'s service',
            'about' => 'faren service number one',
            'service' => ['web design','programming','SEO']
        );
        return view('pages.service')->with($data);
    }
}
