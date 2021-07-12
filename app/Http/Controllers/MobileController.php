<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue as CatalogueModels;
use App\Models\Vehicle as VehicleModels;
use App\Models\Photoproduct as PhotoproductModels;
use Illuminate\Support\Facades\DB;



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
        $vhdetail=DB::table('vehicles as v')
                ->select('v.*',DB::raw("(select p2.photo from photoproducts p2 where p2.product_id=v.id limit 1) as photo"))
                ->where('v.catalogue',$id)
                ->get();
        return view('mobile.catalogue',compact('vhdetail'));
    }

    public function vehicle($id)
    {
        $vehicle=VehicleModels::find($id);
        $photos=PhotoproductModels::Where('product_id',$id)->get();
        //dd($photos);
        return view('mobile.vehicle', compact('vehicle','photos'));;
    }

}
