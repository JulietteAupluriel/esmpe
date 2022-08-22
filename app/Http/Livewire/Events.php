<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Filter;
use Livewire\Component;

class Events extends Component
{
    public  $tag = 'none';

    protected $queryString = [
        'tag' => ['except' => 'none'],
    ];

    public function render()
    {
        $events = Event::orderBy('date')->orderBy('schedule_fr');
        if ($this->tag !== 'none') { $events = $events->where('filter', $this->tag); }

        return view('livewire.events', [
            'events' => $events->get(),
            'filters' => Filter::orderBy('name_fr')->get()
        ]);
    }
}
