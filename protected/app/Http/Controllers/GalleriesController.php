<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GalleryRequest;
use App\Http\Controllers\Controller;

use App\Gallery;

class GalleriesController extends Controller
{

    private $gallery;

    public function __construct(Gallery $gallery)
    {
        $this->middleware('auth');

        $this->gallery = $gallery;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = $this->gallery->get();

        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request, Gallery $gallery)
    {
        //
        //$gallery->create($request->all());

        


        $title          = \Input::get('title');
        $date           = \Input::get('date');
        $video          = \Input::get('video');
        $cover          = '';
        $youtube        = \Input::get('youtube');

        if(\Input::hasFile('image'))
        {

            $destinationPath = 'file_upload/img/galleries'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $cover = $fileName;
        }

        \DB::table('galleries')->insert([
            'title'         => $title,
            'date'          => $date,
            'video'         => $video,
            'cover'         => $cover,
            'youtube'       => $youtube
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('galleries');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
        return view('galleries.show', compact('gallery'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery) 
    {
        //
        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        //
        $gallery->fill($request->input())->save();

        if(\Input::hasFile('image'))
        {
            $destinationPath = 'file_upload/img/galleries'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $cover = $fileName;

            // proses simpan
            $gallery->cover = $cover;
            $gallery->save();
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        $gallery->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('galleries');
    }
}
