<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GuestRequest;
use App\Http\Controllers\Controller;

use App\Guest;
use App\Event;

class GuestsController extends Controller
{

    private $guest;

    public function __construct(Guest $guest)
    {
        $this->middleware('auth');

        $this->guest = $guest;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guests = $this->guest->orderBy('id', 'desc')->get();

        return view('guests.index', compact('guests'));
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

        return view('guests.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestRequest $request, Guest $guest, Event $event)
    {
        //
        $guest->create($request->all());

        $judul = $event->getJudul(\Input::get('event_id'));

        \Mail::send('emails.guest', [
            'event_id' => $judul, 
            'name' => \Input::get('name'), 
            'age' => \Input::get('age'), 
            'phone' => \Input::get('phone'), 
            'email' => \Input::get('email')
            ], function($message)
        {
            $message->to('guestlist@fable.co.id', 'Fable Guest')->from(\Input::get('email'), \Input::get('email'))->subject('Guest');
        });

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');


        if(\Input::get('lokasiinput') != null) {
            return redirect('/');
        } else {
            return redirect('guests');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
        $events = Event::lists('title', 'id');

        return view('guests.edit', compact('guest', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuestRequest $request, Guest $guest)
    {
        //
        $guest->fill($request->input())->save();

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('guests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
        $guest->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('guests');
    }
}
