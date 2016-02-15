<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PromoRequest;
use App\Http\Controllers\Controller;

use App\Promo;

class PromosController extends Controller
{

    private $promo; 

    public function __construct(Promo $promo)
    {
        $this->middleware('auth');

        $this->promo = $promo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promos = $this->promo->orderBy('id', 'desc')->get();

        return view('promos.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromoRequest $request)
    {
        //

        $title          = \Input::get('title');
        $date           = \Input::get('date');
        $description    = \Input::get('description');
        $image          = '';
        

        if(\Input::hasFile('image'))
        {

            $destinationPath = 'file_upload/img/promos'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $image = $fileName;
        }

        \DB::table('promos')->insert([
            'title'         => $title,
            'date'          => $date,
            'description'   => $description,
            'image'         => $image
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('promos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        //
        
    }

    public function reserve(Promo $promo)
    {
        return view('promos.reserve', compact('promo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        //
        return view('promos.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromoRequest $request, Promo $promo)
    {
        //
        $promo->fill($request->input())->save();

        if(\Input::hasFile('image'))
        {
            $destinationPath = 'file_upload/img/promos'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $image = $fileName;

            // proses simpan
            $promo->image = $image;
            $promo->save();
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('promos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promo $promo)
    {
        //
        $promo->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('promos');
    }
}
