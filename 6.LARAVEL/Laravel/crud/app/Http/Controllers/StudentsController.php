<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
class StudentsController extends Controller
{
    public function insert(Request $req){
        // Retrieve input values from the request
        $stdname = $req->input('stdname');
        $stdemail = $req->input('stdemail');
    
        // Insert the data into the students table
        students::create([
            'Std_Name' => $stdname,
            'Std_Email' => $stdemail
        ]);
        
    
        return redirect()->action([StudentsController::class,'getdata']);
    }
    public function getdata(){
        $record = students::all();
       return view('display',['record'=>$record]);
        }
        // Edit record
     public function fetch_id($id)
        {
            $editdata = students::findOrFail($id);
            return view('edit',['editdata'=>$editdata]);
        }
    
        // Update record
    public function update_students(Request $req)
        {
            $id = $req->input('id');
            $name = $req->input('stdname');
            $email = $req->input('stdemail');
    
            students::where('id', $id)->update(['Std_Name' => $name, 'Std_Email' => $email]);
    
            return redirect()->action([StudentsController::class, 'getdata']);
        }
    
        // Delete record
    public function del($id)
        {
            students::destroy($id);
            return redirect()->action([StudentsController::class, 'getdata']);
        }
    

}

