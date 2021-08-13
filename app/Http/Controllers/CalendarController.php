<?php

namespace App\Http\Controllers;

class CalendarController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (view()->exists("vendor/event/calendar")) {
            return view("vendor/event/calendar");
        }
        return abort(404);
    }
    
}
