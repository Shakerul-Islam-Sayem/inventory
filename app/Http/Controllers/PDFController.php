<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use PDF;

class PDFController extends Controller
{
    public function generatePDF(){
        $category = User::get();
        $data = [
            'title' => 'Welcome to Inventory.',
            'date' => date('d/m/Y'),
            'categories' => $category
        ];
        $pdf = PDF::loadView('admin.PDF', $data);
     
        return $pdf->stream('itsolutionstuff.pdf');
    }
}
