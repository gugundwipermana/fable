<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\About;
use App\Blog;
use App\CategoryMenu;
use App\Cover;
use App\Dj;
use App\Event;
use App\Gallery;
use App\Guest;
use App\Menu;
use App\Promo;
use App\Reserve;
use App\House;

// You can alias this in config/app.php.
use Vinkla\Instagram\Facades\Instagram;
use Vinkla\Instagram\InstagramManager;      


class DashboardController extends Controller
{

    
    protected $instagram;

    public function __construct(InstagramManager $instagram)
    {
        $this->instagram = $instagram;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $about = About::first();
        //$blogs = Blog::get();
        //$categorymenus = CategoryMenu::get();
        $cover = Cover::first();
        $djs = Dj::get();
        $events = Event::orderBy('date', 'asc')->unpublished()->get();
        $galleries = Gallery::orderBy('id', 'desc')->get();
        //$guests = Guest::get();
        //$menus = Menu::get();
        //$promos = Promo::get();
        //$reserves = Reserve::get();

        //fab 790290805.1677ed0.75b4ad2d222d463ab8434d295f16e517
        //ggn 504707488.1677ed0.ac1940e0cb944b3393fff41d37dc9c8d
        Instagram::setAccessToken('790290805.1677ed0.75b4ad2d222d463ab8434d295f16e517');
        Instagram::getUserLikes();

        $media = Instagram::getUserMedia();


        $djf = Dj::where('type', '1')->first();
        $dji = Dj::where('type', '2')->first();

        return view('dashboard.index', compact('about', 'cover', 'djs', 'events', 'galleries', 'media', 'djf', 'dji'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function insta()
    {


        

        Instagram::setAccessToken('504707488.1677ed0.ac1940e0cb944b3393fff41d37dc9c8d');
        Instagram::getUserLikes();

        $media = Instagram::getUserMedia();


        //$this->instagram->getUser();

        echo "
            <center>
            <h3>DEVELOPED BY</h3>
            <h2>GUGUN DWI PERMANA</h2>
            <p>gugundwipermana@gmail.com</p>
            </center>
            <br/>
        ";
        

        foreach ($media->data as $entry) {
          echo "<a class='info' href='{$entry->link}'><img src=\"{$entry->images->low_resolution->url}\" width=25% ></a>";
        }


    }


    public function house()
    {
        $houses = House::get();

        return view('dashboard.house', compact('houses'));
        
    }
    
    public function menu()
    {
        $categorymenus = CategoryMenu::get();
        $menus = Menu::get();

        return view('dashboard.menu', compact('categorymenus', 'menus'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('id', 'desc')->get();

        return view('dashboard.blog', compact('blogs'));
        
    }

    public function promo()
    {
        $promos = Promo::orderBy('id', 'desc')->get();

        return view('dashboard.promo', compact('promos'));
    }
}
