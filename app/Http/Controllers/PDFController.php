<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inwarddetail;
use App\Models\Outwarddetail;
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
    public function inwardpdf()
    {
        $inwarddetails = Inwarddetail::get();
        $data = [
            'date' => date('d/m/Y'),
            'inwarddetails' => $inwarddetails,
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.pdf.inwardpdf', $data);
        return $pdf->stream('Product_Inward.pdf', [
            'Attachment' => true,
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Product_Inward.pdf"',
            'Cache-Control' => 'private, max-age=0, must-revalidate',
            'Pragma' => 'public'
        ]);
    }
    public function outwardpdf()
    {
        $outwarddetails = Outwarddetail::get();
        $data = [
            'date' => date('d/m/Y'),
            'outwarddetails' => $outwarddetails,
        ];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.pdf.outwardpdf', $data);
        return $pdf->stream('Product_Outward.pdf', [
            'Attachment' => true,
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Product_Outward.pdf"',
            'Cache-Control' => 'private, max-age=0, must-revalidate',
            'Pragma' => 'public'
        ]);
    }
}
