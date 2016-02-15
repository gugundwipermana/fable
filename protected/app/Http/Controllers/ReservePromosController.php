<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReservePromoRequest;
use App\Http\Controllers\Controller;

use App\ReservePromo;
use App\Promo;

class ReservePromosController extends Controller
{
    private $reservepromo;

    public function __construct(ReservePromo $reservepromo)
    {
        $this->middleware('auth');

        $this->reservepromo = $reservepromo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservepromos = $this->reservepromo->orderBy('id', 'desc')->get();

        return view('reservepromos.index', compact('reservepromos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $promos = Promo::lists('title', 'id');

        return view('reservepromos.create', compact('promos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservePromoRequest $request, ReservePromo $reservepromo)
    {
        //
        $reservepromo->create($request->all());

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');


        if(\Input::get('lokasiinput') != null) {
            return redirect('promo');
        } else {
            return redirect('reservepromos');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ReservePromo $reservepromo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservePromo $reservepromo)
    {
        //
        $promos = Promo::lists('title', 'id');

        return view('reservepromos.edit', compact('reservepromo', 'promos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservePromoRequest $request, ReservePromo $reservepromo)
    {
        //
        $reservepromo->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('reservepromos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservePromo $reservepromo)
    {
        //
        $reservepromo->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('reservepromos');
    }
}
