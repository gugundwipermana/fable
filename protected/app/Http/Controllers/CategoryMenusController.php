<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryMenuRequest;
use App\Http\Controllers\Controller;

use App\CategoryMenu;

class CategoryMenusController extends Controller
{

    private $categorymenu;

    public function __construct(CategoryMenu $categorymenu)
    {
        $this->middleware('auth');

        $this->categorymenu = $categorymenu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorymenus = $this->categorymenu->get();

        return view('categorymenus.index', compact('categorymenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorymenus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryMenuRequest $request, CategoryMenu $categorymenu)
    {
        //
        $categorymenu->create($request->all());

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('categorymenus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryMenu $categorymenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryMenu $categorymenu)
    {
        //
        return view('categorymenus.edit', compact('categorymenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryMenuRequest $request, CategoryMenu $categorymenu)
    {
        //
        $categorymenu->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('categorymenus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryMenu $categorymenu)
    {
        //
        $categorymenu->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('categorymenus');
    }
}
