<?php

namespace App\Http\Controllers;

use App\Event;
use App\Location;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredVenues=[
                ['hero_image'=>'images/hero_bg_1.jpg',
                'name'=>'853 S Lucerne Blvd',
                'address'=>'Los Angeles, CA 90005',
                'price'=>'$2,250,500',
                    'link'=>'#'
            ],
            ['hero_image'=>'images/hero_bg_3.jpg',
                'name'=>'625 S. Berendo St',
                'address'=>'607 Los Angeles, CA 90005',
                'price'=>'$2,050,500',
                'link'=>'#'
            ]
        ];

        $eventTypes=Event::get();
        $locations=Location::get();
        $newestVenues=Venue::latest()->take(6)->get();
        return view('index', compact('featuredVenues', 'eventTypes', 'locations', 'newestVenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
