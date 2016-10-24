<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\clients;
use App\Models\education;
use App\Models\facts;
use App\Models\homepages as Pages;
use App\Models\profile as Profile;
use App\Models\services;
use App\Models\skills;
use App\Models\socials as Socials;
use App\Models\testimonials;
use App\Models\works;

class PagesController extends Controller
{
    private $myProfile, $mySocial, $pages;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->myProfile = Profile::firstOrFail();
        $this->mySocial  = Socials::all();
        $this->pages = Pages::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($this->pages);
        return view('index',['myProfile'=>$this->myProfile,'mySocial'=>$this->mySocial, 'pages'=>$this->pages]);
    }
}
