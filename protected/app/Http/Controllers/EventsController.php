<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Controller;

use App\Event;

class EventsController extends Controller
{

    private $event;

    public function __construct(Event $event) 
    {
        $this->middleware('auth');

        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = $this->event->orderBy('id', 'desc')->get();

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request, Event $event)
    {
        //
        //$event->create($request->all());

        $title          = \Input::get('title');
        $date           = \Input::get('date');
        $type           = \Input::get('type');
        $cover          = '';
        $video          = \Input::get('video');
        $youtube        = \Input::get('youtube');
        $description    = \Input::get('description');

        if(\Input::hasFile('image'))
        {

            $destinationPath = 'file_upload/img/events'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $cover = $fileName;
        }

        \DB::table('events')->insert([
            'title'         => $title,
            'date'          => $date,
            'type'          => $type,
            'cover'         => $cover,
            'video'         => $video,
            'youtube'       => $youtube,
            'description'   => $description
        ]);

        \Alert::success('Data berhasil ditambah!', 'Berhasil!');

        return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        return view('events.show', compact('event'));
    }

    public function reserve(Event $event)
    {
        return view('events.reserve', compact('event'));
    }

    public function guest(Event $event)
    {
        return view('events.guest', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
        $event->fill($request->input())->save();

        if(\Input::hasFile('image'))
        {
            $destinationPath = 'file_upload/img/events'; // upload path
            $nameimage = \Input::file('image')->getClientOriginalName();
            $fileName = rand(11111,99999).'-'.$nameimage; // renameing image
            \Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $cover = $fileName;

            // proses simpan
            $event->cover = $cover;
            $event->save();
        }

        \Alert::success('Data berhasil diedit!', 'Berhasil!');

        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();

        \Alert::success('Data berhasil didelete!', 'Berhasil!');

        return redirect('events');
    }
}
