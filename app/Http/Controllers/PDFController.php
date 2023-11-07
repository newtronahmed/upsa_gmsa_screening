<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePdf(Patient $path_no)
    {
        // $patient = Patient::findOrFail($id);
        $name = $path_no->name;
        $fileName = $name . '_testresults_' . now()->format('Y-m-d') . '.pdf';
        $pdf = Pdf::loadView('pdf.results', ['patient' => $path_no]);

        return $pdf->download($fileName);
    }
}
