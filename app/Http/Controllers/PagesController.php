<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog as Blogs;
use App\Models\clients as Clients;
use App\Models\education as Education;
use App\Models\facts as Facts;
use App\Models\homepages as Pages;
use App\Models\profile as Profile;
use App\Models\services as Services;
use App\Models\skills as Skills;
use App\Models\socials as Socials;
use App\Models\testimonials as Testimonials;
use App\Models\works as Works;

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
        $this->mySocial  = Socials::orderBy('order', 'asc')->get();
        $this->pages = Pages::orderBy('order', 'asc')->get();
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

    public function about()
    {
        $facts = Facts::orderBy('order', 'asc')->get();
        $clients = Clients::orderBy('order', 'asc')->get();
        $services = Services::orderBy('order', 'asc')->get();
        //dd($services);
        return view('about',['myProfile'=>$this->myProfile,'mySocial'=>$this->mySocial, 'pages'=>$this->pages, 'facts'=>$facts, 'clients'=>$clients, 'services'=>$services]);
    }

    public function resume()
    {
        $testimonials = Testimonials::orderBy('order', 'asc')->get();
        $works = Works::orderBy('order', 'desc')->get();
        $education = Education::orderBy('order', 'desc')->get();
        $marketableSkills = Skills::where('type','Marketable')->get();
        $transferableSkills = Skills::where('type','Transferable')->get();
        //dd($marketableSkills);
        return view('resume',['myProfile'=>$this->myProfile,'mySocial'=>$this->mySocial, 'pages'=>$this->pages, 'testimonials'=>$testimonials, 'works'=>$works, 'education'=>$education, 'marketableSkills'=>$marketableSkills, 'transferableSkills'=>$transferableSkills]);
    }

    public function blogLatest()
    {
        $latestBlogs = Blogs::orderBy('published_at', 'asc')->whereDate('published_at', '<=', \Carbon\Carbon::today()->toDateString())->get();
        //dd($latestBlogs);
        return view('blog',['myProfile'=>$this->myProfile,'mySocial'=>$this->mySocial, 'pages'=>$this->pages,'latestBlogs'=>$latestBlogs]);
    }

    public function blogSingle($id)
    {
        $blog = Blogs::find($id);
       // dd($blog);
        return view('blog-single',['myProfile'=>$this->myProfile,'mySocial'=>$this->mySocial, 'pages'=>$this->pages, 'blog'=>$blog]);
    }
}
