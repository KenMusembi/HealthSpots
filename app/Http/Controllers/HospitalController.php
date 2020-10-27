<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Http\Resources\HospitalCollection;
//use Illuminate\Http\Models\Hospital;
use App\Models\Hospital;
use DataTables;

class HospitalController extends Controller
{
    //
    public function get(Request $request) {
      $hospital = DB::select('select * from hospitals');
      return response($hospital, 200);
    //  return response()->json([ 'Kenyatta'=> [ 'registration'=> 'ABC001', 'dateRegistered'=> '2019-01-01', 'color'=> 'black', 'make'=> 'tesla', 'model'=> 's']], 200);
    }

    public function index(Request $request)
    {
      $County = request()->input('County');
        if (request()->input('County')){
          $hospital = DB::select("select * from hospitals where County = '$County'");
            //return new HospitalCollection(Hospital::where('County', 'LIKE', request()->input('County'))->get());
            return response( $hospital);
        }
        //return new HospitalCollection(Hospital::paginate());
        return response($hospital);
    }

    public function getBasicData(Request $request)
   {
     if ($request->ajax()) {
          $data = Hospital::latest()->get();
          return Datatables::of($data)
              ->addIndexColumn()
              ->addColumn('action', function($row){
                  $btn = '<a href="/hospitals" class="view btn btn-info btn-sm">Read More</a>';
                  return $btn;
              })
              ->rawColumns(['action'])
              ->make(true);
      }

      return view('welcome');
   }

    public function get_web(Request $request) {
      $hospital = DB::select('select * from hospitals');
      return view('welcome',['users'=>$hospital]);
    //  return response()->json([ 'Kenyatta'=> [ 'registration'=> 'ABC001', 'dateRegistered'=> '2019-01-01', 'color'=> 'black', 'make'=> 'tesla', 'model'=> 's']], 200);
    }

    public function get_admin(Request $request)
    {
        $hospital = DB::select('select * from hospitals');
        return view('admin',['users'=>$hospital]);
    }
}
