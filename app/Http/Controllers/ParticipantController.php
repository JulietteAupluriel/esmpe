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
            'participants' => Participant::where('event_id', request()->query('event'))->orderBy('created_at', 'desc')->get(),
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

    public function store(Participant  $participant)
    {
      
        $participant = Participant::create($this->getInputs());

        return redirect()->route('admin.participants', ['event' => $participant->event_id]);
    }

    public function update(Participant $participant)
    {
     

        $participant->update($this->getInputs());
       
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
            'noemail' => ['boolean'],
            'phone' => ['nullable', 'string', 'max:255'],
            'commune' => ['nullable', 'string', 'max:255'],
            'national' => ['nullable', 'regex:^[0-9]{2}[.\- ]{0,1}[0-9]{2}[.\- ]{0,1}[0-9]{2}[.\- ]{0,1}[0-9]{3}[.\- ]{0,1}[0-9]{2}$^'],
            'event_id' => ['required', 'integer'],
            'lang' => ['nullable', 'string'],
        ]);
    }

    public function export()
    {
        $data = Participant::where('event_id', request()->query('event'))->orderBy('created_at', 'desc')->get();
        $handle = fopen(storage_path('app/public/' . Str::slug($data->first()->event->title_fr) . '.csv'), 'w');

        fputcsv($handle, [
            "#",
            "Date inscr",
            "Nom",
            "Pr??nom",
            "Registre national",
            "Email",
            "Pas d'email",
            "Phone",
            "Commune",
            "Langue",
        ], ';');
        
        foreach ($data as $key => $row) {
	        fputcsv($handle, [
                $key + 1,
                $row->created_at,
                $row->name,
                $row->firstname,
                $row->national,
                $row->email,
                $row->noemail,
                $row->phone,
                $row->commune,
                $row->lang,
            ], ';');
        }

        fclose($handle);
        return response()->download(storage_path('app/public/' . Str::slug($data->first()->event->title_fr) . '.csv'));
    }

}
