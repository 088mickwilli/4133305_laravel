<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BarChartController extends Controller
{
    public function Barchart(){
        $book = Books::select("book","take","back")->get();

        $answer = ['book','take','back'];

        foreach($book as $key => $value){
            $answer[++$key] = [$value->book, (int)$value->take, (int)$value->back] ;
        }
        return view('barchart',compact('answer'));
    }
}
