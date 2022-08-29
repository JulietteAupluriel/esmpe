<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\Subscription;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;
use Session;
class Register extends Component
{

    public $event, $name, $firstname, $email, $phone, $commune,  $national, $event_id,  $noemail=false, $accept = false, $declare = false, $registered = false;

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'firstname' => ['required', 'string', 'max:255'],
        'noemail' => ['boolean'],
        'email' => ['required_if:noemail,==,false'],
        'phone' => ['required', 'string', 'max:255'],
        'commune' => ['required', 'string', 'max:255'],
        'national' => ['required', 'regex:^[0-9]{2}[.\- ]{0,1}[0-9]{2}[.\- ]{0,1}[0-9]{2}[.\- ]{0,1}[0-9]{3}[.\- ]{0,1}[0-9]{2}$^'],
        'accept' => ['required', 'accepted'],
        'declare' => ['required', 'accepted']
    
    ];

    public function register()
    {
        
        $this->validate();
//dd($this->validate());
        if ($this->event->participants->count() >= $this->event->places) {
            return redirect()->route('events.show', $this->event);
        }

        Participant::create([
            'name' => $this->name,
            'firstname' => $this->firstname,
            'email' => $this->email,
            'phone' => $this->phone,
            'noemail' => $this->noemail,
            'commune' => $this->commune,
            'national' => $this->national,
            'event_id' => $this->event->id,
            'lang' => Session::get('lang'),
        ]);

        $emailContent = [
            'name' => $this->firstname . ' ' . $this->name,
            'email' => $this->email,
            'event_fr' => $this->event->title_fr,
            'event_nl' => $this->event->title_nl,
            'date' => $this->event->date,
        ];

     
               

        $commune = 'juliette@aupluriel.be';
        $email = $this->email;      
        if($email!=''){Mail::to($commune)->send(new Subscription($emailContent));
              
        }
        else{   Mail::to($email)->bcc($commune)->send(new Subscription($emailContent)); }

        $commune = 'mde1040jh@actiris.be';

        $this->registered = true;
    }
    
    public function render()
    {
        return view('livewire.register');
    }
}
