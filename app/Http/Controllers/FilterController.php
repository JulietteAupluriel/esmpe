<?php

namespace App\Http\Controllers;

use App\Models\Filter;

class FilterController extends Controller
{
    public function index()
    {
        return view('admin.filters.index', [
            'filters' => Filter::orderBy('name_fr')->get()
        ]);
    }

    public function store()
    {
        Filter::create(request()->validate([
            'name_fr' => ['required', 'string', 'max:255'],
            'name_nl' => ['required', 'string', 'max:255']
        ]));
        return back();
    }

    public function update(Filter $filter)
    {
      
        $filter->update($this->getInputs());
      
        return back();
    }

    public function destroy(Filter $filter)
    {
        $filter->delete();
        return back();
    }

    private function getInputs()
    {
        return request()->validate([
            'name_fr' => ['required', 'string', 'max:255'],
            'name_nl' => ['required', 'string', 'max:255']
        ]);
    }



}
