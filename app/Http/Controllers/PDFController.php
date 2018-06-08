<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use DB;
use App\Student;
use PDF;

class PDFController extends Controller
{
    //
    public function getPDF()
    {
    	$x = Input::get ( 'x' );
    	$students=Student::where('studID','=',$x)->get();	
    	$pdf=PDF::loadView('users.customer',['students'=>$students]);
    	return $pdf->stream('users.customer.pdf');
    }
}
