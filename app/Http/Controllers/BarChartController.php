<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class BarChartController extends Controller
{
    public function Barchart()
    {
        $sale = Sale::select("date","borrow","return")->get();

        $answer = ['Dates','Borrow','Return'];

        foreach($sale as $key => $value){
            $answer[++$key] = [$value->date, (int)$value->Borrow, (int)$value->car] ;
        }
        return view('barchart',compact('answer'));
    }
}
