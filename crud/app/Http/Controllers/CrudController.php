<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use DB;
Use App\CrudModel;

class CrudController extends Controller
{
    //
    public function index(){
    	$data = CrudModel::latest()->get();
   		//dd($data);
    	return view('pages.index', compact('data'));
    }

    public function create(){

    	return view('pages.create');
    }

    public function store(Request $request){

    		// if(!DB::table('crud_models')
    		// 	->where('email',$request->email)
    		// 	->orWhere( 'username', $request->username )
    		// 	->exists()){


    		if(!CrudModel::where('email',$request->email)->exists()){

                 if(!CrudModel::where( 'username', $request->username )->exists()){

                 	$this->validate(request(),[
		    		'username' => 'required|min:2',
		    		'email' => 'required|email',
		    		'password' => 'required|min:5'
					]);


			     	$data = CrudModel::create([
			    		'username' => $request->username,
			    		'password' => bcrypt($request->password),
			    		'email'    => $request->email
			    		]);

	    	//dd($data);
	    			$request->session()->flash('success', 'Record Successfully Saved');
	    			return redirect('/index');

                 }else{

                 	$request->session()->flash('failed', 'Username already exists!');
                	return back();

                 }
    			

    		}else{

    			$request->session()->flash('failed', 'Email already exists!');
                return back();
    		}
       

    	
    }
    public function show($id){
    	$data = CrudModel::findOrfail($id);

    	return view('pages.show',compact('data'));
    }
    public function test(Request $request, $id){

    	$data = CrudModel::find($id);
       	
    	 
    	 $this->validate($request, [
                'email' => 'required|email',
                'username' => 'required|min:2',
                'oldpassword' => 'required',
                'newpassword' => 'required|min:5'
            ]);

    	if(Hash::check($request->oldpassword, $data->password)){


              // $request->session()->flash('success', 'Password changed');
    	
    			$data->username = $request->username;
    			$data->email = $request->email;
    			$data->password = bcrypt($request->newpassword);
				$data->save();
    			$request->session()->flash('success', 'The information was updated successfully.');
				return back();
                
    	}else{

    		$request->session()->flash('failed', 'Old password is incorrect!');

                return back();
    	}

    }
    public function destroy($id){

    	 $data = CrudModel::findOrFail($id);
         $data->delete();

        return response()->json($data);
    }
}
