<?php

namespace App\Http\Controllers;

use App\Models\General;

class GeneralController extends Controller
{
  

    public function edit()
    {
        return view('admin.generals.edit', ['general' => General::first()]);
    }

   

    public function update()
    {
        $general =General::first();
        $general->update($this->getInputs());
        return redirect()->route('admin.general');
    }

    private function getInputs()
    {
        return request()->validate([
            'intro_fr' => ['required', 'string'],
            'intro_nl' => ['required', 'string'],
            'aboutintro_fr' => ['required', 'string'],
            'aboutintro_nl' => ['required', 'string'],
            'about_fr' => ['required', 'string'],
            'about_nl' => ['required', 'string'],
            'legals_fr' => ['required', 'string'],
            'legals_nl' => ['required', 'string'],
            'formintro_fr' => ['required', 'string'],
            'formintro_nl' => ['required', 'string'],
            
        ]);
    }

   

}
