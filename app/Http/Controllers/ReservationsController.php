<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Database\Eloquent\Collection;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Reservations::all();
        return view('pages.index', compact('reservations'));
    }

    public function index2()
    {
        $userId = Auth::id();
        $racename = DB::table('reservations')
            ->join('races', 'reservations.race_id', '=', 'races.id')
            ->select('races.name as rn')
            ->where('reservations.user_id',$userId)
            ->pluck('rn')
            ->toArray();

        $tier = DB::table('reservations')
            ->join('category_r_s', 'reservations.category_id', '=', 'category_r_s.id')
            ->select('category_r_s.name as crs')
            ->where('reservations.user_id',$userId)
            ->pluck('crs')
            ->toArray();

        $type = DB::table('reservations')
            ->join('type', 'reservations.type_id', '=', 'type.id')
            ->select('type.name as t')
            ->where('reservations.user_id',$userId)
            ->pluck('t')
            ->toArray();

        $count = DB::table('reservations')
            ->select('reservations.count as c')
            ->where('reservations.user_id',$userId)
            ->pluck('c')
            ->toArray();

        $price = DB::table('reservations')
            ->select('reservations.price as p')
            ->where('reservations.user_id',$userId)
            ->pluck('p')
            ->toArray();

            $data = collect();
            $data->racename = $racename;
            $data->tier = $tier;
            $data->type = $type;
            $data->count = $count;
            $data->price = $price;

            $count = DB::table('reservations')->where('user_id',$userId)->count();
            $count = $count-1; 


        return view('pages.order_history', compact('data','count'));
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
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
