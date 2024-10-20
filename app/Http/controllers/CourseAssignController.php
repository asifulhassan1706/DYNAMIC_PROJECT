<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseAssignController extends Controller
{
    //
    public function createCourseAssign(){
        $course = DB::table('course')->select('course_name')->get();
        $section = DB::table('sections')->select('sectionname')->get();
        $teacher = DB::table('users')->select('name')->where('role', 'Teacher')->get();
        $session = DB::table('session_info')->select('name')->get();

        return view('backend.pages.course assign.createCourse', 
                [
                    'course' => $course, 
                    'section' => $section,
                    'teacher' => $teacher,
                    'session_info' => $session
                ]);
    }

    public function storeAssignCourse(Request $rqt){
        $session_info = $rqt->session_info;
        $course_name = $rqt->course_name;
        $section = $rqt->section;
        $course_teacher = $rqt->course_teacher;

        DB::table('course_assign')->insert([
            'session' => $session_info,
            'course_name' => $course_name,
            'section' => $section,
            'course_teacher' => $course_teacher
        ]);

        return redirect('all-course-assign');

    }

    public function allCourseAssign(){
        $all = DB::table('course_assign')->get();
        return view('backend.pages.course assign.allCourseAssign', ['all' => $all]);
    }

    public function editCourseAssign($id){
        $data = DB::table('course_assign')->where('id', $id)->first();
        return view('backend.pages.course assign.editcourseassign', ['data' => $data]);
    }

    public function storeEditAssignCourse(Request $rqt, $id){
        $session_info = $rqt->session_info;
        $course_name = $rqt->course_name;
        $section = $rqt->section;
        $course_teacher = $rqt->course_teacher;

        $update = DB::table('course_assign')->where('id', $id)->update([
            'session' => $session_info,
            'course_name' => $course_name,
            'section' => $section,
            'course_teacher' => $course_teacher
        ]);

        return redirect('all-course-assign');
    }

    public function deleteCourseAssign($id){
        DB::table('course_assign')->where('id', $id)->delete();
        return redirect('all-course-assign');
 
    }
}
