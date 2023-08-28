<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inwarddetail;
use App\Models\PDF;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;
// use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $categories = Category::get();
        $data = [
            'title' => 'Welcome to Inventory.',
            'date' => date('d/m/Y'),
            'categories' => $categories,
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.pdf.PDF', $data);
        return $pdf->stream('Product_pdf.pdf');
    }

    public function generatePDF2()
    {
        $inwarddetails = Inwarddetail::get();
        $data = [
            'date' => date('d/m/Y'),
            'inwarddetails' => $inwarddetails,
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.pdf.inwardpdf', $data);
        $pdf->getDomPDF()->set_option('isPhpEnabled', true);
    $pdf->getDomPDF()->set_option('isHtml5ParserEnabled', true);
    $pdf->getDomPDF()->set_option('isRemoteEnabled', true);
    $pdf->getDomPDF()->set_option('isCssFloatEnabled', true);
    $pdf->getDomPDF()->set_option('isJavascriptEnabled', true);
    $pdf->getDomPDF()->set_option('isPhpEnabled', true);
    $pdf->getDomPDF()->set_option('chroot', realpath(base_path()));
    $pdf->getDomPDF()->set_option('isHtml5ParserEnabled', true);
    $pdf->getDomPDF()->set_option('isJavascriptEnabled', true);
    $pdf->getDomPDF()->set_option('isPhpEnabled', true);
    $pdf->getDomPDF()->set_option('isPhpEnabled', true);
    $pdf->getDomPDF()->set_option('isPhpEnabled', true);
    $pdf->stream('Product_Inward.pdf', [
        'Attachment' => true,
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="Product_Inward.pdf"',
        'Cache-Control' => 'private, max-age=0, must-revalidate',
        'Pragma' => 'public'
    ]);
    }
}
