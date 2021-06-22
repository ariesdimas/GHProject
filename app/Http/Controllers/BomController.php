<?php

namespace App\Http\Controllers;

use App\Models\Bom;
use Illuminate\Http\Request;
use App\Models\Vehicle as VehicleModels;
use App\Models\Bom as BomModels;
use Illuminate\Support\Facades\DB;


class BomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bom=VehicleModels::Where('status','active')->get();
        $bom =  DB::table('boms as b')
        ->select('b.id','b.kode','b.name','b.description','v.name AS vehicle')
        ->join('vehicles as v','v.id','=','b.vehicle')
        ->get();

        return view('bom.index',compact('bom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle=VehicleModels::Where('status','active')->get();
        return view('bom.create',compact('vehicle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BomModels::create($request->except('_token'));
        return redirect('bom');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $bom
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $bom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $bom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bom=BomModels::find($id);
        $vehicle=VehicleModels::Where('status','active')->get();
        return view('bom.edit', compact('bom','vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $bom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        BomModels::updateOrCreate(['id' => $id],$request->except(['_token','_method']));
        return redirect('bom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $bom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bom=BomModels::find($id);
        $bom->update(['status'=>'non active']);
        return redirect('bom');
    }

    public function deletedata($id){
        BomModels::updateOrCreate(['id' => $id],['status'=>'Non Active']);
        //return redirect('bom');
        //dd($bom);BomModels
        return redirect('bom');
    }
}
