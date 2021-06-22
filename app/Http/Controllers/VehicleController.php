<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Models\Vehicle as VehicleModels;
use App\Models\Catalogue as CatalogueModels;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$vehicle=VehicleModels::Where('status','active')->get();
        $vehicle =  DB::table('vehicles as v')
        ->select('v.id','v.kode','v.name','v.description','v.harga','c.name AS catalogue')
        ->join('catalogues as c','c.id','=','v.catalogue')
        ->get();

        return view('vehicle.index',compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogue=CatalogueModels::Where('status','active')->get();
        return view('vehicle.create',compact('catalogue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VehicleModels::create($request->except('_token'));
        return redirect('vehicle');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle=VehicleModels::find($id);
        $catalogue=CatalogueModels::Where('status','active')->get();
        return view('vehicle.edit', compact('vehicle','catalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        VehicleModels::updateOrCreate(['id' => $id],$request->except(['_token','_method']));
        return redirect('vehicle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle=VehicleModels::find($id);
        $vehicle->update(['status'=>'non active']);
        return redirect('vehicle');
    }

    public function deletedata($id){
        VehicleModels::updateOrCreate(['id' => $id],['status'=>'Non Active']);
        //return redirect('vehicle');
        //dd($vehicle);
        return redirect('vehicle');
    }
}
