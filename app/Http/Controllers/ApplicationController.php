<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infoA;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function addAappli(Request $request){
        $info = new infoA;
        $info->passport_no=$request->txtPassNo;
        $info->surname=$request->txtSurname;
        $info->other_surnames=$request->txtOthername;
        $info->perm_address=$request->txtAddrs;
        $info->telephone=$request->txttpNo;
        $info->changed_name="";
        $info->designation="";
        $info->insert_id="";
        $info->years=0;
        $info->amendments="";
        $info->save();
        $data=infoA::all();

        return view('Application')->with('infos',$data);
        return redirect()->back();
        
    }

    public function updtRecord(Request $request){
        $pid=$request->txtupid;
        $info=InfoA::find($pid);
        $info->passport_no=$request->txtupPassNo;
        $info->surname=$request->txtupSurname;
        $info->other_surnames=$request->txtupOthername;
        $info->perm_address=$request->txtupAddrs;
        $info->telephone=$request->txtuptpNo;
        $info->save();

        return redirect()->back();


    }

    public function addAappli2(Request $request){
        $pid=$request->txtmreinfoID1;
        $info=InfoA::find($pid);
        $info->changed_name=$request->txtchangesurname;
        $info->designation=$request->txtDesignation;
        $info->insert_id=$request->txtIdentity;
        $info->years=$request->txtExtension;
        $info->amendments=$request->txtExtension;
        $info->save();
    }

    public function moreinfo($id){
        $infoA=infoA::find($id);
        return view('Application2')->with('moreinfo',$infoA);


    }  

    public function issurnameyes($id){
        $sure=InfoA::find($id);
        $sure->is_surname=1;
        $sure->save();
        return redirect()->back();
    }

    public function issurnameno($id){
        $sure=InfoA::find($id);
        $sure->is_surname=0;
        $sure->save();
        return redirect()->back();
    }
    public function isjobyes($id){
        $sure=InfoA::find($id);
        $sure->jobYes=1;
        $sure->save();
        return redirect()->back();
    }

    public function isjobno($id){
        $sure=InfoA::find($id);
        $sure->jobYes=0;
        $sure->save();
        return redirect()->back();
    }
    public function isidentyes($id){
        $sure=InfoA::find($id);
        $sure->is_ident=1;
        $sure->save();
        return redirect()->back();
    }

    public function isidentno($id){
        $sure=InfoA::find($id);
        $sure->is_ident=0;
        $sure->save();
        return redirect()->back();
    }
    public function isvalid_extenyes($id){
        $sure=InfoA::find($id);
        $sure->is_valid_exten=1;
        $sure->save();
        return redirect()->back();
    }

    public function isvalid_extenno($id){
        $sure=InfoA::find($id);
        $sure->is_valid_exten=0;
        $sure->save();
        return redirect()->back();
    }
    public function isjourneyyes($id){
        $sure=InfoA::find($id);
        $sure->is_journey=1;
        $sure->save();
        return redirect()->back();
    }

    public function isjourneyno($id){
        $sure=InfoA::find($id);
        $sure->is_journey=0;
        $sure->save();
        return redirect()->back();
    }
    public function isammendmentsyes($id){
        $sure=InfoA::find($id);
        $sure->is_ammendments=1;
        $sure->save();
        return redirect()->back();
    }

    public function isammendmentsno($id){
        $sure=InfoA::find($id);
        $sure->is_ammendments=0;
        $sure->save();
        return redirect()->back();
    }

   public function deleteRec($id){
        $del=InfoA::find($id);
        $del->delete();
        return redirect()->back();
   }
        
    
}
