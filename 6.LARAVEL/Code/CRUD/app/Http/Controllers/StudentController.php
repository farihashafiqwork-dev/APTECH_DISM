<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;




class StudentController extends Controller
{
   public function data(){
    return view('welcome');
   }
   public function about(){
    return view('about');
   }
   public function contact(){
    return view('contact');
   }
   public function register(){
      return view('register');
     }
   //   public function create(){
      

   //    $request->validate([
   //       'username' => 'required',
   //       'email' => 'required | email',
   //       'phone' => 'required',
   //       'address' => 'required'

       

   //    ]);
   //    $data=compact($request);
   // return view('register')->with($data);
   //   }

   public function create(Request $request)
{
    $request->validate([
        'username' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
    ]);

    $data= new StudentModel();
    $data->Name=$request['username'];
    $data->Email=$request['email'];
    $data->Phone=$request['phone'];
    $data->Address=$request['address'];
    $data->save();

return view('register');
}
public function userview(){
$data= StudentModel::all();
// dd($data);
$records= compact('data');


    return view('userView')->with($records);
}

public function user_dlt($id){
    $user_data= StudentModel::find($id);
    // dd($user_data);
    if(!is_null($user_data)){
        $user_data->delete();
return redirect('userView');
    }else{
        return redirect('userView');
    }
 
}

public function user_edit($id){
    $user_Data = StudentModel::find($id);
    // dd($user_Data);
    return view('update')->with(['user_Data' => $user_Data]);

}
public function  user_update($id, Request $request){
    $data= StudentModel::find($id);
    $data->Name=$request['username'];
    $data->Email=$request['email'];
    $data->Phone=$request['phone'];
    $data->Address=$request['address'];
    $data->save();
    return redirect('/userView');



}

}




