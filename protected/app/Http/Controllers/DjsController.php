<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\DjRequest;
use App\Http\Controllers\Controller;

use App\Dj;

class DjsController extends Controller
{

    private $dj;

    public function __construct(Dj $dj)
    {
        $this->middleware('auth');

        $this->dj = $dj;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $djs = $this->dj->get();

        return view('djs.index', compact('djs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('djs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DjRequest $request, Dj $dj)
    {
        //
        //$dj->create($request->all());

        $name           = \Input::get('name');
        $title          = \Input::get('title');
        $description    = \Input::get('description');
        $facebook       = \Input::get('facebook');
        $twitter        = \Input::get('twitter');
        $instagram      = \Input::get('instagram');
        $type           = \Input::get('type');

        $image          = '';
        $background     = '';


        if(\Input::hasFile('image'))
        {

            $destinationPath = 'file_upload/img/djs'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $image = $fileName;

        }

        if(\Input::hasFile('background'))
        {

            $destinationPath = 'file_upload/img/djs'; // upload path
            $nameimage = \Input::file('background')->getClientOriginalName();

            $eximage = \Input::file('background')->getClientOriginalExtension();

            $fileName = rand(11111,99999).'.'.$eximage; // renameing image
            \Input::file('background')->move($destinationPath, $fileName); // uploading file to given path

            $background = $fileName;
        }


        \DB::table('djs')->insert([
            'name'          => $name,
            'title'         => $title,
            'description'   => $description,
            'facebook'      => $facebook,
            'twitter'       => $twitter,
            'instagram'     => $instagram,
            'image'         => $image,
            'background'    => $background,
            'type'          => $type
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('djs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dj $dj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dj $dj)
    {
        //
        return view('djs.edit', compact('dj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DjRequest $request, Dj $dj)
    {
        //
        $dj->fill($request->input())->save();

        if(\Input::hasFile('image'))
        {
            $destinationPath = 'file_upload/img/djs'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $image = $fileName;

            // proses simpan
            $dj->image = $image;
            $dj->save();
        }

        if(\Input::hasFile('background'))
        {
            $destinationPath = 'file_upload/img/djs'; // upload path
            $nameimage = \Input::file('background')->getClientOriginalName();
            $eximage = \Input::file('background')->getClientOriginalExtension();

            $fileName = rand(11111,99999).'.'.$eximage; // renameing image
            \Input::file('background')->move($destinationPath, $fileName); // uploading file to given path

            $background = $fileName;

            // proses simpan
            $dj->background = $background;
            $dj->save();
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('djs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dj $dj)
    {
        //
        $dj->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('djs');
    }
}
