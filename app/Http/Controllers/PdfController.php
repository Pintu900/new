<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use PDF;
use App\Question;

class PdfController extends Controller
{
    public function pdfGenerator(){
        $questions=Question::limit(5)->select('title','id','user_id')->get();
        $data = ['questions'=>$questions];
        $pdf = PDF::loadView('pdf.sample',$data);
         return $pdf->stream('sample.pdf');
    }
}
