<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $uri = $request->route()->getPrefix();
        /**
         * pages adalah nama folder
         * schedule adalah nama file
         */
        return view('pages.index');

    }

}
