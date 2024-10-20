<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CreateController extends Controller
{
    public function create(){
        return view ('backend.pages.course.create');
    }
    public function storecourse(Request $rqt){
        $course_name = $rqt->course_name;
        $course_code = $rqt->course_code;
        $course_credit = $rqt->course_credit;
        $course_type = $rqt->course_type;
        $semester = $rqt->semester;

        DB::table('course')->insert([
            'course_name' => $course_name,
            'course_code' => $course_code,
            'course_credit' => $course_credit,
            'course_type' => $course_type,
            'semester' => $semester
        ]);

        return redirect('all');
    }

    public function all(){
        $data = DB::table('course')->get();
        return view('backend.pages.course.all', ['data' => $data]);
    }
    public function edit($id){
        $edit = DB::table('course')->where('id', '=' , $id)->first();
        return view('backend.pages.course.edit',['course'=>$edit]);
     }
 
 
 
     public function storeUpdate(Request $req , $id){
         
         $course_name = $req->course_name;
         $course_code= $req->course_code;
         $course_credit = $req->course_credit;
         $course_type = $req->course_type;
         $semester = $req->semester;
         DB::table('course')
         ->where('id', '=' , $id)
         ->update([
             'course_name'=>$course_name,
             'course_code'=>$course_code,
             'course_credit'=>$course_credit,
             'course_type'=>$course_type,
             'semester'=>$semester
         ]);
         return redirect('all');
 
     }
    public function delete($id){
        DB::table('course')
            ->where('id', '=', $id)
            ->delete();
        return redirect('all');
        
    }


}