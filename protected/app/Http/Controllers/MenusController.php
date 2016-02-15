<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;

use App\Menu;
use App\CategoryMenu;

class MenusController extends Controller
{

    private $menu;

    public function __construct(Menu $menu)
    {
        $this->middleware('auth');

        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = $this->menu->orderBy('id', 'desc')->get();

        $categorymenus = CategoryMenu::get();

        return view('menus.index', compact('menus', 'categorymenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorymenus = CategoryMenu::lists('name', 'id');

        return view('menus.create', compact('categorymenus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request, Menu $menu)
    {
        //
        $menu->create($request->all());

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
        $categorymenus = CategoryMenu::lists('name', 'id');

        return view('menus.edit', compact('menu', 'categorymenus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        //
        $menu->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
        $menu->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('menus');
    }
}
