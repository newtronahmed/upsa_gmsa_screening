<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Exception;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function dashboard(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string",
            "sex" => "required|string",
            "student_id" => "required|string",
            "level" => "required|string",
            "path_no" => "required|string",
            "department" => "nullable|string"
        ]);
        try {
            Patient::create([
                "name" => $validated["name"],
                "sex" => $validated["sex"],
                "student_id" => $validated["student_id"],
                "level" => $validated["level"],
                "path_no" => $validated["path_no"],
                "department" => $validated["department"],
            ]);
            // session()->flash('success', 'Successfully created patient');
            // toastr()->success("Successfully created patient {{ $request->only('path_no') }} ");
            $pathNo = $request->get('path_no');

            toastr()->success("Successfully created patient #{$pathNo}");

            return redirect()->back();
        } catch (Exception $e) {
            toastr()->success("Error while creating patient");
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function testResults(Request $request, Patient $path_no)
    {
        try {
            // dd($path_no->path_no);
            $path_no->update([
                "bp" => $request->bp,
                "weight" => $request->weight,
                "height" => $request->height,
                "bmi" => $request->bmi
            ]);
            toastr()->success("Successfully created patient #{$path_no->path_no}");

            return redirect()->back();
        } catch (Exception $e) {
            toastr()->success("Something went wrong while updating {$path_no->path_no}");
            return redirect()->back();
        }
    }
    public function phlebotomy(Request $request, Patient $path_no)
    {
        try {
            $path_no->update([
                'phlebotomist' => $request->phlebotomist,
                'phlebotomy_time' => $request->phlebotomy_time,
            ]);
            toastr()->success("Successfully updated patient #{$path_no->path_no}");
            return redirect()->back();
        } catch (Exception $e) {
            //throw $th;
            toastr()->success("Something went wrong while updating {$path_no->path_no}");
            return redirect()->back();
        }
    }
    public function serologicalTest(Request $request, Patient $path_no)
    {
        try {
            //code...
            $path_no->update([
                'hepatitis_b' => $request->hepatitis_b,
                'h_pylori' => $request->h_pylori,
                'vdrl' => $request->vdrl
            ]);
            toastr()->success("Successfully updated patient #{$path_no->path_no}");
            return redirect()->back();
        } catch (Exception $e) {
            //throw $th
            toastr()->success("Something went wrong while updating {$path_no->path_no}");
            return redirect()->back();
        }
    }
    public function bloodGroupings(Request $request, Patient $path_no)
    {
        try {
            $path_no->update([
                'blood_group' => $request->blood_group,
                'rh_typing' => $request->rh_typing
            ]);
            toastr()->success("Successfully created patient #{$path_no->path_no}");
            return redirect()->back();
        } catch (Exception $e) {
            //throw $th;
            toastr()->success("Something went wrong while updating {$path_no->path_no}");
            return redirect()->back();
        }
    }
}
