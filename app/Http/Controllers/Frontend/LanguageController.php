<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //

    public function Englisn_Lang()
    {
        Session::get('lang'); // Session get tula anlam data ta
        session()->forget('lang'); // Session forget ager Data ta delete korlam
        Session()->put('lang', 'english'); // Session Put Nuton Data ta Set korlam
        return redirect()->back();
    }
    public function Bangla_Lang()
    {
        Session::get('lang'); // Session get tula anlam data ta
        session()->forget('lang'); // Session forget ager Data ta delete korlam
        Session()->put('lang', 'bangla'); // Session Put Nuton Data ta Set korlam
        return redirect()->back();
    }
}
