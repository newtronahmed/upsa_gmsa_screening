<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function testResults(Patient $path_no)
    {
        $id = $path_no;

        return view('testResults',compact('id') ); 
    }

    public function phlebotomy(Patient $path_no)
    {
        $id = $path_no;
        return view('phlebotomy', compact('id'));
    }

    public function dashboard()
    {
        $maxNo = Patient::max('id') ?: 0;

        $nextNo = str_pad($maxNo + 1, 4, '0', STR_PAD_LEFT);

        $path_no = 'PATH ' . $nextNo;
        return view('dashboard', compact('path_no'));
    }

    public function serologicalTest(Patient $path_no)
    {
        $id = $path_no;
        return view('serologicalTest', compact('id'));
    }

    public function bloodGroupings(Patient $path_no)
    {
        $id = $path_no;
        return view('bloodGroupings', compact('id'));
    }
    public function updateDashboard(Patient $path_no)
    {
        $id = $path_no;
        return view('updateDashboard', compact('id'));
    }


}
