<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use PDF;

class PDFController extends Controller
{
    public function index(Request $request)
 {
 $book = Books::latest()->paginate(33);
 if($request->has('download'))
 {
$pdf = PDF::loadView('book-pdf',compact('book'))->setOptions(['defaultFont'=>'san-serif']);
 return $pdf->download('pdfview.pdf');
 }
 return view('book-pdf',compact('book'));
 }

}
