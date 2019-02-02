<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
     public function getpdf()
    {
        $pdf = \PDF::loadview('pdf.mutasis', compact('mutasis'));
        return $pdf->stream();
    }
}
