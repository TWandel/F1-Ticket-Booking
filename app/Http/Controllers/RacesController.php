<?php

namespace App\Http\Controllers;

use App\Models\Races;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\events; 
use App\Http\Controllers\Controller;

class RacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Races::all();
        $res = DB::table('reservations')->where('race_id',1)->count();
        $res2 = DB::table('reservations')->where('race_id',2)->count();
        $res3 = DB::table('reservations')->where('race_id',3)->count();
        return view('pages.index', compact('races','res','res2','res3'));
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
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function show(Races $races)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function edit(Races $races)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Races $races)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Races  $races
     * @return \Illuminate\Http\Response
     */
    public function destroy(Races $races)
    {
        //
    }
}
