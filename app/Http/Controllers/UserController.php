<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\BarUsersChart;
use App\Charts\PieUsersChart;
use App\Charts\AreaUsersChart;
use App\Charts\LineUsersChart;
use App\Charts\DonutUsersChart;
use App\Charts\PolarUsersChart;
use App\Charts\RadarUsersChart;
use App\Charts\RadialUsersChart;
use App\Charts\HeatmapUsersChart;
use App\Charts\HorizontalUsersChart;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PieUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function donut(DonutUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function radial(RadialUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function polar(PolarUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function line(LineUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function area(AreaUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function bar(BarUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function horizontal(HorizontalUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function heatmap(HeatmapUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
    }
    public function radar(RadarUsersChart $chart)
    {
        return view('users.index', ['chart' => $chart->build()]);
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
