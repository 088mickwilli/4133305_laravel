<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use PDF;

class PDFController extends Controller
{
    public function index(Request $request)
    {
        $member = Member::lastest()->paginate(50);

        if($request->has('download'))
        {
            $pdf = PDF::loadView('member-pdf',compact('member'))->setOptions(['defaultFont'=>'san-serif']);
            return $pdf->download('pdfview.pdf');
        }
        return view('member-pdf',compact('member'));
    }
}
