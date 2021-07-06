<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue as CatalogueModels;
use App\Models\Vehicle as VehicleModels;
use App\Models\Photoproduct as PhotoproductModels;



class MobileController extends Controller
{
    public function index()
    {
        $catalogue=CatalogueModels::Where('status','active')->get();

        return view('mobile',compact('catalogue'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function catalogue($id)
    {
        $vehicle=VehicleModels::Where('catalogue',$id)->get();
        return view('mobile.catalogue',compact('vehicle'));
    }

    public function vehicle($id)
    {
        $vehicle=VehicleModels::find($id);
        $photos=PhotoproductModels::Where('product_id',$id)->get();
        //dd($photos);
        return view('mobile.vehicle', compact('vehicle','photos'));;
    }

}
