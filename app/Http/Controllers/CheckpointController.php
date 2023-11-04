<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class CheckpointController extends Controller
{
    public function check (Request $request){
        // $request->only('id');
        $validated = request()->validate([
            "path_no" => "required"
        ]);
        
        $patient = Patient::where('path_no', $validated['path_no']);
        if ($patient){
            //Check if pid exists
            $redirectUrl = route($request->input('page'), ["path_no"=>$validated["path_no"]]);
            //if exists redirct to redirectUrl
            return redirect($redirectUrl);
        }
        return redirect()->back()->with(["message" => "ID not found"]);
    }
}
