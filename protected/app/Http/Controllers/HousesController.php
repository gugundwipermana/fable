<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\HouseRequest;
use App\Http\Controllers\Controller;

use App\House;

class HousesController extends Controller
{
    private $house;

    public function __construct(House $house)
    {
        $this->middleware('auth');

        $this->house = $house;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $houses = $this->house->get();

        return view('houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseRequest $request, House $house)
    {
        //
        $house->create($request->all());

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('houses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
        return view('houses.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HouseRequest $request, House $house)
    {
        //
        $house->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('houses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
        $house->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('houses');
    }
}
