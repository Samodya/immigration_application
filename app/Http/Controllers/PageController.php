<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\infoA;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function application(){
        $data=infoA::all();
        return view('Application')->with('infos',$data);
    }
    
    public function printinfo($id){
        $data=InfoA::find($id);
      return view('Application4viewmore')->with('view',$data);
    }

    public function updateRec($id){
      $data=InfoA::find($id);
      return view('Application3')->with('view2',$data);
    }
}
