<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Auth;
use DB;
use Excel;
class AuthController extends Controller
{
    //
    public function login()
    {
    	return view('auth.login');
    }
    public function handleLogin(Request $request)
    {
    	$data=$request->only('email','password');
    	if(\Auth::attempt($data))
    	{
    	
    	return redirect()->intended('import');
    	}
    	return back()->withInput();
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }


    public function importExport()
	{
		return view('users.import');
	}
	public function importExcel()
	{
		if(Input::hasFile('import_file'))
		{
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader)
			{
			})->get();
			if(!empty($data) && $data->count())
			{
				foreach ($data as $key => $value)
				{
					$insert[] = ['studID' => $value->studID, 'name' => $value->name,'email'=>$value->email,'araby'=>$value->araby,'english'=>$value->english,'math'=>$value->math,'science'=>$value->science,'totaldegree'=>$value->totaldegree];
				}
				if(!empty($insert))
				{
					DB::table('students')->insert($insert);
					dd('Done');
				}
			}
			
		}
			return back();	
	}
	
	
}
