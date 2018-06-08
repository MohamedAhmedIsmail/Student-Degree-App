<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use DB;
use App\Student;
class results extends Controller
{
    //
    public function getdata()
    {
    	return view('users.display');
    }
    public function fetch()
    {
   	$q = Input::get ( 'q' );
   	$x = Input::get ( 'x' );
   	$user=Student::where('name','=', $q)->where('studID','=',$x)->get();
   // $user = Student::where('studID','LIKE','%'.$q.'%')->orWhere('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('araby','LIKE','%'.$q.'%')->orWhere('english','LIKE','%'.$q.'%')->orWhere('math','LIKE','%'.$q.'%')->orWhere('science','LIKE','%'.$q.'%')->orWhere('totaldegree','LIKE','%'.$q.'%')->get();
   
    //$userID=Student::where('studID','==','%'.$x.'%')->get();
   // $userID=Student::where('studID','LIKE','%'.$q.'%')->orWhere('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('araby','LIKE','%'.$q.'%')->orWhere('english','LIKE','%'.$q.'%')->orWhere('math','LIKE','%'.$q.'%')->orWhere('science','LIKE','%'.$q.'%')->orWhere('totaldegree','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
    {
     	return view('users.show')->withDetails($user)->withQuery ( $q );
    }
    else
    { 
    	return view ('users.show')->withMessage('No Details found. Try to search again !');
    }
}
}
