<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Filter;

class EventController extends Controller
{
    public function index()
    {
        return view('admin.events.index', [
            'events' => Event::orderBy('date')->get()
        ]);
    }

    public function create()
    {
        return view('admin.events.create', [
            'event' => new Event,
            'filters' => Filter::orderBy('name_fr')->get()
        ]);
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', [
            'event' => $event,
            'filters' => Filter::orderBy('name_fr')->get()
        ]);
    }

    public function store()
    {
        Event::create($this->getInputs());
        return redirect()->route('admin.events');
    }

    public function update(Event $event)
    {
        $event->update($this->getInputs());
        return redirect()->route('admin.events');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return back();
    }

    private function getInputs()
    {
        return request()->validate([
            'title_fr' => ['required', 'string', 'max:255'],
            'title_nl' => ['required', 'string', 'max:255'],
            'body_fr' => ['nullable', 'string'],
            'body_nl' => ['nullable', 'string'],
            'venue_fr' => ['nullable', 'string'],
            'venue_nl' => ['nullable', 'string'],
            'schedule_fr' => ['required', 'string', 'max:255'],
            'schedule_nl' => ['required', 'string', 'max:255'],
            'speaker_fr' => ['nullable', 'string', 'max:255'],
            'speaker_nl' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'string', 'max:255'],
            'places' => ['required', 'integer'],
            'date' => ['nullable', 'date'],
            'filter' => ['nullable', 'integer']
        ]);
    }

}