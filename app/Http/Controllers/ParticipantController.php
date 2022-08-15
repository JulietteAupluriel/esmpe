<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Support\Str;

class ParticipantController extends Controller
{
    public function index()
    {
        return view('admin.participants.index', [
            'participants' => Participant::where('event_id', request()->query('event'))->orderBy('name')->get(),
        ]);
    }

    public function create()
    {
        return view('admin.participants.create', [
            'participant' => new Participant,
        ]);
    }

    public function edit(Participant $participant)
    {
        return view('admin.participants.edit', [
            'participant' => $participant,
        ]);
    }

    public function store()
    {
        $participant = Participant::create($this->getInputs());
        return redirect()->route('admin.participants', ['event' => $participant->event_id]);
    }

    public function update(Participant $participant)
    {
        
        $participant->update($this->getInputs());
        dd($participant);
        return redirect()->route('admin.participants', ['event' => $participant->event_id]);
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return back();
    }

    private function getInputs()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email'],
            'noemail' => ['nullable'],
            'phone' => ['nullable', 'string', 'max:255'],
            'commune' => ['nullable', 'string', 'max:255'],
            'national' => ['nullable', 'regex:^[0-9]{2}[.\- ]{0,1}[0-9]{2}[.\- ]{0,1}[0-9]{2}[.\- ]{0,1}[0-9]{3}[.\- ]{0,1}[0-9]{2}$^'],
            'event_id' => ['required', 'integer']
        ]);
    }

    public function export()
    {
        $data = Participant::where('event_id', request()->query('event'))->orderBy('name')->get();
        $handle = fopen(storage_path('app/public/' . Str::slug($data->first()->event->title) . '.csv'), 'w');
        
        fputcsv($handle, [
            "#",
            "Nom",
            "Prénom",
            "Registre national",
            "Email",
            "Pas d'email",
            "Phone",
            "Commune",
           
        ], ';');
        
        foreach ($data as $key => $row) {
	        fputcsv($handle, [
                $key + 1,
                $row->name,
                $row->firstname,
                $row->national,
                $row->email,
                $row->noemail,
                $row->phone,
                $row->commune,
        
            ], ';');
        }

        fclose($handle);
        return response()->download(storage_path('app/public/' . Str::slug($data->first()->event->title) . '.csv'));
    }

}
