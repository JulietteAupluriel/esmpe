<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
      
        

        $langs = array();

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    // break up string into pieces (languages and q factors)
    preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);

    if (count($lang_parse[1])) {
        // create a list like "en" => 0.8
        $langs = array_combine($lang_parse[1], $lang_parse[4]);
    	
        // set default to 1 for any without q factor
        foreach ($langs as $lang => $val) {
            if ($val === '') $langs[$lang] = 1;
        }

        // sort list based on value	
        arsort($langs, SORT_NUMERIC);
    }
}

// look through sorted list and use first one that matches our languages

foreach ($langs as $lang => $val) {

	if (strpos($lang, 'nl') === 0) {
        session(['locale' => 'NL']);
        $locale = 'NL'; 
        app()->setLocale($locale);
	} else if (strpos($lang, 'fr') === 0) {
        session(['locale' => 'FR']);
        $locale = 'FR'; 
        app()->setLocale($locale);
	} 
   
}

// show default site or prompt for language

     if (request()->query('locale')) {
            session(['locale' => request()->query('locale')]);
        }

        $locale = session('locale', app()->getLocale());
if($locale=='FR' || $locale =='NL'){ 
   
        
    }
    else{  $locale ='FR';}
   
    app()->setLocale($locale);
        return $next($request);
    }
}
