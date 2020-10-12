<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HospitalController extends Controller
{
    //
    public function get(Request $request) {
      $hospital = DB::select('select * from hospitals');
      return response($hospital, 200);
    //  return response()->json([ 'Kenyatta'=> [ 'registration'=> 'ABC001', 'dateRegistered'=> '2019-01-01', 'color'=> 'black', 'make'=> 'tesla', 'model'=> 's']], 200);
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
