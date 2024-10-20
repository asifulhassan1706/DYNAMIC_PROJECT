<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('Auth.login');
    // }

   
    // public function register()
    // {
    //     return view('Auth.registration');
    // }

    // public function registerStore(Request $request){
        
    //     $name = $request->name;
    //     $email = $request->email;
    //     $password = $request->password;
    //     $confirm_password = $request->confirm;
        
    //     $user = new User();
    //     $user->name = $name;
    //     $user->email = $email;
    //     $user->password = md5($password);
    //     $user->role = 'Student';
    //     if($user->save()){
    //         return redirect()->back()->with('info', 'Account Created. Waiting for admin approval');
    //     }
    //       }

          
    // public function login(){
    //     return view('Auth.login');
    // }
    // public function loginStore(Request $request){
      
    //     $email = $request->email;
    //     $password = $request->password;
       
    //     $user = User::where('email', '=', $email)
    //                 ->where('password', '=', md5($password))
    //                 ->first();
    //                 // echo $user;
    //     if($user){
    //         if($user->is_approved == 1){
    //             Session::put('username', $user->name);
    //             Session::put('username', $user->role);
    //             return redirect()->route('admin.dashboard');
    //         }
    //         else{
    //             return redirect()->back()->with('failure', 'Account not yet approved');
    //         }
    //     }

    // }

    // public function dashboard(){
    //     return view('admin.pages.dashboard');
    // }
    // public function about(){
    //     return view('admin.pages.about');
    // }
    
    // // public function storeLogin(Request $request){
    // //     // return view('Auth.dashboard');
    // //     $email=$request->email;
    // //     $password=$request->password;
    // //     dd($email.'  '.$password);
    // // }
    

    // public function users(){
    //     $users = User::all();
    //     return view('admin.pages.users', compact('users'));
    // }
    // public function approve($id){
    //     $user = User::find($id);
    //     $user->is_approved = 1;
    //     if($user->save()){
    //         return redirect('users');
    //     }
    // }
    // public function logout(Request $request){
    //     $request->session()->forget(['username','userrole']);
    //     return redirect('login');

        
    // }
    public function register(){
        return view('Auth.registration'); 
    }
    public function student_register(){
        return view('Auth.student_register'); 
    }
    public function registerStoreStudent(Request $request){
        
    $name = $request->name;
    $email = $request->email;
    $contact = $request->contact;
    $roll = $request->roll;
    $password = $request->password;
    $confirm_password = $request->confirm;
    
    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->contact = $contact;
    $user->roll = $roll;
    $user->password = md5($password);
    $user->role = 'Student';
    if($user->save()){
        return redirect()->back()->with('info', 'Account Created. Waiting for admin approval');
    }
      }
    
      public function teacher_register(){
        return view('Auth.teacher_register'); 
    }

    public function registerStoreTeacher(Request $request){
       
        $name = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $password = $request->password;
        $confirm_password = $request->confirm;
        
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->contact = $contact;
        $user->roll = 'NULL';
        $user->password = md5($password);
        $user->role = 'Teacher';
        if($user->save()){
            return redirect()->back()->with('info', 'Account Created. Waiting for admin approval');
        }
          }
    public function login(){
        return view('Auth.login');
        }
        public function loginstore(Request $request){
            $email = $request->email;
            $password = $request->password;
            $user = User::where('email','=',$email)
                ->where('password','=', md5($password))
                ->where('role', 'admin')
                ->first();
            $student = User::where('email','=',$email)
                ->where('password','=', md5($password))
                ->where('role', 'Student')
                ->first();
            $teacher = User::where('email','=',$email)
                ->where('password','=', md5($password))
                ->where('role', 'Teacher')
                ->first();
            if($user){
                return redirect('admin-dashboard');
            }
            if($student){
                Session::put('teacher_name', $student->name);
                Session::put('student_id', $student->roll);
                return redirect('student-dashboard');
            }
            if($teacher){
                Session::put('teacher_name', $teacher->name);
                return redirect('teacher-dashboard');
            }
            //     if($user){
            //     if($user->is_approved == 1)
            //     Session::put('username', $user->name);
            //     Session::put('userrole', $user->role);
            //     return redirect('dashboard');
            // } 
            // else{
            //     return redirect()->back()->with('failure','Account not yet approval');
            // }
        }
        public function viewApprovedList(){
             $unapp = User::all();
            return view('Auth.users',compact('unapp'));
        }
        // public function unapprovedList(){
        //     $unapprovedList = DB::table('users')->where('is_approved', 0)->get();
        //     return redirect('Auth.users', ['list' => $unapprovedList]);
        // }
        public function approveList($id){
            $approve = DB::table('users')->where('id', $id)->update([
                'is_approved' => 1
            ]);
            return redirect()->back();
        }
        public function logout(){
            Session::flush(['student_id', 'teacher_name', 'name']);
            return redirect('login');
        }
        public function studentDashboard(){
            return view('backend.pages.students.studentDashboard');
        }
        public function adminDashboard(){
            return view('Auth.dashboard');
        }
        public function teacherDashboard(){
            return view('backend.pages.teacher.teacherDashboard');
        }
        // public function dashboard(){
        //     return view('Auth.dashboard');
        // }
        // public function allUsers(){
        //     $users=User::all();
        //     return view('auth.users',compact('users'));
        // }
        // public function approve($id){
        //     $user = User::find($id);
        //     $user->is_approved = 1;
        //     if($user->save()){
        //         return redirect('users');
        //     }
        // }
      

}

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
