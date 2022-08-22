<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index() {
        return view('admin.logos.index', [
            'logos' => Logo::orderBy('order')->get()
        ]);
    }

  

    public function create() {
       return view('admin.logos.create', ['logo' => new Logo]);
    }
   
    public function edit(Logo $logo) {
       return view('admin.logos.edit', ['logo' => $logo]);
    }

    public function store(Logo $logo) {
         Logo::create($this->data());
        $this->image($logo);
        return redirect()->route('admin.logos');
    }

    public function update(Logo $logo) {
        $logo->update($this->data());
        $this->image($logo);
        return redirect()->route('admin.logos');
    }

    public function destroy(Logo $logo) {
        if ($logo->image) { Storage::disk('public')->delete($logo->image); }
        $logo->delete();
        return back();
    }

    private function data() {
        return request()->validate([
          
            'title' => 'filled|string|max:255',
            'url_fr' => 'filled|string|max:255',
            'url_nl' => 'filled|string|max:255',
            'page' => 'filled|string|max:255',
            'order' => 'integer',
            'image' => 'filled'
            
            
        ]);
    }

    private function image($logo) {
     
        if (request()->hasFile('image')) {
      
            $logo->update(['image' => request()->file('image')->store('uploads', 'public')]);
           
        }
    }
}
