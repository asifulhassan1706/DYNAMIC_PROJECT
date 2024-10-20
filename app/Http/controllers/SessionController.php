<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class SessionController extends Controller
{
    //
    public function create_session(){
        return view('backend.pages.session.createSession');
    }

    public function store_session(Request $req){
       $name = $req->name;
       $status = $req->status;
      

       // Next, we have to insert the values in the database table
       DB::table('session_info')->insert([
            'name' => $name,
            'status' => $status,
            
        ]);
        return redirect('session');
    }

    public function all(){
        $data = DB::table('session_info')->get(); // SELECT * FROM session // returns an array
        return view('backend.pages.session.allSession', ['session'=>$data]);
    }

    public function edit($id){
        $result = DB::table('session_info')
            ->where('id', '=', $id)
            ->first(); // SELECT * from persons WHERE id = 2
        return view('backend.pages.session.editSession', ['session'=>$result]); 
    }
    public function update(Request $r, $id){
        $name = $r->name;
        $status = $r->status;
     

        $affected = DB::table('session_info')
              ->where('id', $id)
              ->update(['name' => $name,
                    'status' => $status]);
        return redirect('session');
    }

    public function delete($id){
        $deleted = DB::table('session_info')
                        ->where('id', '=', $id)
                        ->delete(); 
        return redirect('session');
    }

    public function createAssignment(){
        $course = DB::table('course_assign')->where('course_teacher', Session::get('teacher_name'))->get();
        $group_name = DB::table('group_info')->get();
        return view('backend.pages.teacher.createAssignment', ['course' => $course, 'group_name' => $group_name]);
    }

    public function storeAssignment(Request $rqt){
        $assignment_name = $rqt->assignment_name;
        $course_name = $rqt->course_name;
        $group_name = $rqt->group_name;
        $student_group = $rqt->student_group;
        $assignment_description = $rqt->assignment_description;

        DB::table('assignment')->insert([
            'assignment_name' => $assignment_name,
            'course' => $course_name,
            'group_name' => $group_name,
            'student_group' => $student_group,
            'description' => $assignment_description
        ]);

        return redirect()->back();
    }

    public function viewNewGroup(){
        $result = DB::table('group_info')->get();
        return view('backend.pages.teacher.viewNewGroup', ['result' => $result]);
    }

    public function newGroup(){
        return view('backend.pages.teacher.group'); 
    }

    public function storeNewGroup(Request $rqt){
        $group_name = $rqt->group_name;
        $total_member = $rqt->total_member;

        DB::table('group_info')->insert([
            'group_name' => $group_name,
            'members' => $total_member
        ]);

        return redirect()->back();
    }

    public function allAssignment(){
        $result = DB::table('assignment')->get();
        return view('backend.pages.enroll.allAssignment', ['result' => $result]);
    }

    public function allCourse(){
        $data = DB::table('course')->get();
        return view('backend.pages.teacher.allCours', ['data' => $data]);
    }
}
