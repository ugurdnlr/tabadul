<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index($lang)
    {
        $langs = ['tr','en'];
        if (in_array($lang, $langs)){
            Session::put('locale', $lang);
            return redirect()->back();
        }
    }
}
