<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BlogRequest;
use App\Http\Controllers\Controller;

use App\Blog;

class BlogsController extends Controller
{

    private $blog;

    public function __construct(Blog $blog)
    {
        $this->middleware('auth');

        $this->blog = $blog;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = $this->blog->orderBy('id', 'desc')->get();

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request, Blog $blog)
    {
        //
        $blog->create($request->all());

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('blogs');
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
    public function edit(Blog $blog)
    {
        //
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        //
        $blog->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('blogs');
    }
}
