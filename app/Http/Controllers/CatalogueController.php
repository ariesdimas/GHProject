<?php

namespace App\Http\Controllers;


use App\Models\Catalogue;
use Illuminate\Http\Request;
use App\Models\Catalogue as CatalogueModels;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogue=CatalogueModels::Where('status','active')->get();

        return view('catalogue.index',compact('catalogue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CatalogueModels::create($request->except('_token'));
        return redirect('catalogue');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function show(Catalogue $catalogue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogue=CatalogueModels::find($id);
        return view('catalogue.edit', compact('catalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CatalogueModels::updateOrCreate(['id' => $id],$request->except(['_token','_method']));
        return redirect('catalogue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogue  $catalogue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogue=CatalogueModels::find($id);
        $catalogue->update(['status'=>'non active']);
        return redirect('catalogue');
    }

    public function deletedata($id){
        CatalogueModels::updateOrCreate(['id' => $id],['status'=>'Non Active']);
        //return redirect('catalogue');
        //dd($catalogue);
        return redirect('catalogue');
    }
}
