<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PDF as ModelsPDF;
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
// use PDF;

class PDFController extends Controller
{
    public function generatePDF(){
        $categories = Category::get();
        $data = [
            'title' => 'Welcome to Inventory.',
            'date' => date('d/m/Y'),
            'categories' => $categories
        ];
        $pdf = PDF::loadView('admin.PDF', $data);
     
        return $pdf->stream('itsolutionstuff.pdf');
    }
}
