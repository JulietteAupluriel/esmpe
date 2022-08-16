<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Filter;
use App\Models\General;
use App\Models\Participant;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function index()
    {
       
        return view('index', ['content' => General::first()]);
       //return view('index');
    }

    public function about()
    {
        return view('about', ['content' => General::first()]);
    }

    public function programme()
    {
       // $events = Event::get();
        //return view('programme', ['events' => $events]);
        return view('programme');
    }

    public function show_an_event(Event $event)
    {
        return view('event', [
            'event' => $event,
            'filters' => Filter::all(),
           'content' => General::first()
        ]);
    }


    public function legal()
    {
        return view('legal', ['content' => General::first()]);
    }

    public function exportAll()
    {
        $events = Event::get();
        foreach ($events as $event) {
            $participants[] = $event->participants;
        }
        $participants = Arr::collapse($participants);
        $handle = fopen(storage_path('app/public/particpations.csv'), 'w');
        
        fputcsv($handle, [
            "#",
            "Nom",
            "Prénom",
            "Registre national",
            "Email",
            "Phone",
            "Commune",
            "Atelier"
        ], ';');
        
        foreach ($participants as $key => $row) {
	        fputcsv($handle, [
                $key + 1,
                $row->name,
                $row->firstname,
                $row->national,
                $row->email,
                $row->phone,
                $row->commune,
                $row->event->title
            ], ';');
        }

        fclose($handle);
        return response()->download(storage_path('app/public/' . request()->query('commune') . '.csv'));
    }
    
}
