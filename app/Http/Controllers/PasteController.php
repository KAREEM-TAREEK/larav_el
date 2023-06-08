<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasteController extends Controller
{    
    // تظهر بيانات الجدول ع الموقع 
    public function index()
	{
        $data = DB::table('pastes')->get();
        return view('paste.index',compact('data'));
    }
    public function create(){
        return view('paste.create');

    }
    // تضيف الداتا لل الجدول 
    public function insert(Request $request){

        DB::table('pastes')->insert([
            'title' => $request->title, //اسم ال name (title)
            'body' => $request->body
        ]);

        return redirect()->route('paste');


    }
    // تعديل البيانات
    public function edit($id){
       
        $data = DB::table('pastes')->where('id',$id)->first();
        //        dd($data);
        return view('paste.edit',compact('data'));
    }
    //delete
    public function delete($id){
        DB::table('pastes')->where('id',$id)->delete();
        //DB::table('pastes')->truncate();
            // return redirect()->back()
        //        return response("success delete");


        return redirect()->route('paste');

    }
    //=====================================&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&=====================
    // update
    public function update(Request $request,$id){
        DB::table('pastes')->where('id',$id)->update([
                   'title' => $request->title, //اسم ال name (title)
            'body' => $request->body
        ]);
       // return response("success update");
       return redirect()->route('paste');
        
        }
        //delete all
        // public function deleteAll(){
        //              DB::table('pastes')->delete();
        //              DB::table('pastes')->truncate();
                    


        //        return redirect()->route('paste'); 


        


          
                       
   


        //  }
}
