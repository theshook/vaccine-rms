<?php

namespace App\Http\Controllers;

use App\Baby;
use App\Http\Requests\CreateBabiesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BabiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trashed = Baby::onlyTrashed()->count();
        $babies = Baby::all();
        return view('babies.index')
            ->with('babies', $babies)
            ->with('trashed', $trashed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipalities = DB::table('municipalities')->select('mun_title', 'id')->orderBy('mun_title', 'asc')->get();
        return view('babies.create')
            ->with('municipalities', $municipalities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBabiesRequest $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function show(Baby $baby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function edit(Baby $baby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baby $baby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baby $baby)
    {
        //
    }

    public function apiGetMunicipalBarangay($municipal_id = 0)
    {
        $barangays = DB::table('barangays')
            ->where('municipal_id', $municipal_id)
            ->select('bar_title', 'id')->orderBy('bar_title', 'asc')->get();
        echo json_encode($barangays);
        exit;
    }
}
