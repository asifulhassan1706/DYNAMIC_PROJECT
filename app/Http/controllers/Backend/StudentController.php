<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use File;
use Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('name', 'asc')->get();
        
        return view('backend.pages.students.manage', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $student = new Student();
        $student->name = $request->name;
        
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->role = 'student';

        if($request->image){
            $image = $request->file('image');
            $img = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('backend/img/students/' . $img );
            Image::make($image)->save($location);
            $student->image = $img;
        }

        $student->save();
        return redirect()->route('student.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        if(!is_null($student)){
            return view('backend.pages.students.edit', compact('student'));
        }
        else{

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->image = $request->image;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->role = 'student';

        if($request->image){

            //delete existing image
            if(File::exists('backend/img/students/'. $student->image)){
                File::delete('backend/img/students/'. $student->image);
            };

            $image = $request->file('image');
            $img = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('backend/img/students/' . $img );
            Image::make($image)->save($location);
            $student->image = $img;
        }
        $student->save();
        return redirect()->route('student.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if( !is_null( $student )){
            $student->delete();
            return redirect()->route('student.manage');
        }
    }
}
