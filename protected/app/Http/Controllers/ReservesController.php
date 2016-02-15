<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReserveRequest;
use App\Http\Controllers\Controller;

use App\Reserve;
use App\Event;

class ReservesController extends Controller
{

    private $reserve;

    public function __construct(Reserve $reserve)
    {
        $this->middleware('auth');

        $this->reserve = $reserve;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reserves = $this->reserve->orderBy('id', 'desc')->get();

        return view('reserves.index', compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $events = Event::lists('title', 'id');

        return view('reserves.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReserveRequest $request, Reserve $reserve, Event $event)
    {
        //
        $reserve->create($request->all());

        $judul = $event->getJudul(\Input::get('event_id'));

        \Mail::send('emails.reserve', [
            'event_id' => $judul, 
            'name' => \Input::get('name'), 
            'age' => \Input::get('age'), 
            'phone' => \Input::get('phone'), 
            'email' => \Input::get('email')
            ], function($message)
        {
            $message->to('reserve@fable.co.id', 'Fable Reserve')->from(\Input::get('email'), \Input::get('email'))->subject('Reserve');
        });

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        if(\Input::get('lokasiinput') != null) {
            return redirect('/');
        } else {
            return redirect('reserves');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserve $reserve)
    {
        //
        $events = Event::lists('title', 'id');

        return view('reserves.edit', compact('reserve', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReserveRequest $request, Reserve $reserve)
    {
        //
        $reserve->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('reserves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserve $reserve)
    {
        //
        $reserve->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('reserves');
    }
}
