<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CoverRequest;
use App\Http\Controllers\Controller;

use App\Cover;

class CoversController extends Controller
{

    private $cover;

    public function __construct(Cover $cover)
    {
        $this->middleware('auth');

        $this->cover = $cover;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $covers = $this->cover->get();

        return view('covers.index', compact('covers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('covers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoverRequest $request, Cover $cover)
    {
        //
        //$cover->create($request->all());

        $firstquote     = \Input::get('firstquote');
        $lastquote      = \Input::get('lastquote');
        $video          = \Input::get('video');
        $music          = '';
        $title          = \Input::get('title');
        $band           = \Input::get('band');
        $album          = \Input::get('album');
        $date           = \Input::get('date');


        if(\Input::hasFile('music'))
        {
            $music      = \Input::file('music');
            $isimusic   = file_get_contents($music);
            $upload     = file_put_contents('file_upload/music/'.$music->getClientOriginalName(), $isimusic);

            $music      = $music->getClientOriginalName();
        }

        \DB::table('covers')->insert([
            'firstquote'    => $firstquote,
            'lastquote'     => $lastquote,
            'video'         => $video,
            'music'         => $music,
            'title'         => $title,
            'band'          => $band,
            'album'         => $album,
            'date'          => $date
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('covers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cover $cover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cover $cover)
    {
        //
        return view('covers.edit', compact('cover'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoverRequest $request, Cover $cover)
    {
        //
        $cover->fill($request->input())->save();

        if(\Input::hasFile('music'))
        {
            $music      = \Input::file('music');
            $isimusic   = file_get_contents($music);
            $upload     = file_put_contents('file_upload/music/'.$music->getClientOriginalName(), $isimusic);

            $music      = $music->getClientOriginalName();

            // proses simpan
            $cover->music = $music;
            $cover->save();
        }

        if(\Input::hasFile('image'))
        {
            $image      = \Input::file('image');
            $isiimage   = file_get_contents($image);
            $upload     = file_put_contents('img/backcover.jpg', $isiimage);
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('covers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cover $cover)
    {
        //
        $cover->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('covers');
    }
}
