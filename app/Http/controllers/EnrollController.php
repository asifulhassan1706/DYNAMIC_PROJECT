<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class EnrollController extends Controller
{
    public function enroll(){

        $session = DB::table('session_info')->where('status', 1)->first();
        $course = DB::table('course')->get();
        return view ('backend.pages.enroll.enroll', 
        [
            'session_info' => $session->name,
            'course' => $course
        ]);
    }
    public function storeenroll(Request $rqt){
        $course_id = $rqt->course_id;
        $section = $rqt->section;
        $session = $rqt->session;

        $section = array_filter($section);
        $section = array_values($section);

        $session_arr = [];
        $student_id_arr = [];

        for($i=0; $i<count($course_id); $i++){
            array_push($session_arr, $session);
            array_push($student_id_arr, Session::get('student_id'));

            DB::table('enrollment')->insert([
                'student_id' =>$student_id_arr[$i],
                'course_id' => $course_id[$i],
                'section' => $section[$i],
                'session' => $session_arr[$i]
            ]);
        }
        return redirect()->back();
    }
    
}
