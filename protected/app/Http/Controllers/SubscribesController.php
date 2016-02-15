<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subscribe;

class SubscribesController extends Controller
{
    private $subscribe;

    public function __construct(Subscribe $subscribe)
    {
        //$this->middleware('auth');

        $this->subscribe = $subscribe;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subscribes = $this->subscribe->get();

        return view('subscribes.index', compact('subscribes'));
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
    public function store(Request $request, Subscribe $subscribe)
    {
        //
        $subscribe->create($request->all());

        

        \Mail::send('emails.welcome', ['email' => \Input::get('email')], function($message)
        {
            $message->to('subscribe@fable.co.id', 'Fable Subscribe')->from(\Input::get('email'), \Input::get('email'))->subject('Subscribe');
        });

        \Alert::success('Email anda berhasil didaftarkan!', 'Berhasil!');

        return redirect('/');
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
    public function destroy(Subscribe $subscribe)
    {
        //
        $subscribe->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('subscribes');
    }
}
