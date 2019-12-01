<?php

namespace App\Http\Controllers;

use App\Baby;
use App\Http\Requests\CreateBabiesRequest;
use App\Http\Requests\UpdateBabiesRequest;
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
        $baby = new Baby();
        if (!empty($request->barangay)) {
            $barangay = $baby->getBarangayTitle($request->barangay)->bar_title;
            $municipal = $baby->getMunicipalTitle($request->municipality)->mun_title;
            $lnglat = $baby->getLngLat($barangay, $municipal);
        }
        Baby::create([
            'baby_family_serial_number' => $request->baby_family_serial_number, 
            'baby_dob' => $request->dob, 
            'baby_nhts' => $request->nhts, 
            'baby_first_name' => $request->first_name, 
            'baby_middle_name' => $request->middle_name, 
            'baby_last_name' => $request->last_name, 
            'baby_name_ext' => $request->name_ext, 
            'baby_mother_first' => $request->mother_first_name, 
            'baby_mother_middle' => $request->mother_middle_name, 
            'baby_mother_last' => $request->mother_last_name, 
            'baby_municipality' => $request->municipality, 
            'baby_barangay' => $request->barangay, 
            'baby_date_screening' => $request->dateScreening, 
            'baby_zip' => $request->zipCode, 
            'baby_street' => $request->street, 
            'baby_sex' => $request->gender,
            'baby_lat' => $lnglat[1], 
            'baby_lng' => $lnglat[0]
        ]);

        session()->flash('success', 'Baby Information successfully saved.');

        return redirect(route('babies.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function show(Baby $baby)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function edit(Baby $baby)
    {
        $municipalities = DB::table('municipalities')->select('mun_title', 'id')->orderBy('mun_title', 'asc')->get();
        return view('babies.edit')->with('baby', $baby)->with('municipalities', $municipalities);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBabiesRequest $request, Baby $baby)
    {
        if (!empty($request->barangay)) {
            $barangay = $baby->getBarangayTitle($request->barangay)->bar_title;
            $municipal = $baby->getMunicipalTitle($request->municipality)->mun_title;
            $lnglat = $baby->getLngLat($barangay, $municipal);
        }
        $baby->update([
            'baby_dob' => $request->dob, 
            'baby_nhts' => $request->nhts, 
            'baby_first_name' => $request->first_name, 
            'baby_middle_name' => $request->middle_name, 
            'baby_last_name' => $request->last_name, 
            'baby_name_ext' => $request->name_ext, 
            'baby_mother_first' => $request->mother_first_name, 
            'baby_mother_middle' => $request->mother_middle_name, 
            'baby_mother_last' => $request->mother_last_name, 
            'baby_municipality' => $request->municipality, 
            'baby_barangay' => $request->barangay, 
            'baby_date_screening' => $request->dateScreening, 
            'baby_zip' => $request->zipCode, 
            'baby_street' => $request->street, 
            'baby_sex' => $request->gender,
            'baby_lat' => $lnglat[1], 
            'baby_lng' => $lnglat[0]
        ]);

        session()->flash('success', 'Baby Information successfully updated.');

        return redirect(route('babies.index'));
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

    public function apiGetMunicipalBarangay(Request $request)
    {
        $municipal_id = ($request->empty) ? 0 : $request->idBar;

        $barangays = DB::table('barangays')
            ->where('municipal_id', $municipal_id)
            ->select('bar_title', 'id')->orderBy('bar_title', 'asc')->get();
        echo json_encode($barangays);
        exit;
    }
}
