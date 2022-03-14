<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\EachUser;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        $data = DB::table('student_courses_table')->get();
        return view('dashboard', ['data'=>$data]);
        
    }

    public static function getUserName(){
        
        $id = Auth::id();

        $each_user = User::find($id);

        return ($each_user->name);
    }

    public static function getUserUni(){
        
        $id = Auth::id();

        $each_user = EachUser::find($id);

        return ($each_user->university);
    }

    public static function getUserDep(){
        
        $id = Auth::id();

        $each_user = EachUser::find($id);

        return ($each_user->department);
    }

    public static function getUserEmail(){
        
        $id = Auth::id();

        $each_user = EachUser::find($id);

        return ($each_user->email);
    }

    public static function getUserNotes(){
        
        $id = Auth::id();

        $each_user = EachUser::find($id);

        return ($each_user->notes);
    }

    public static function getId(){

        $id = Auth::id();

        return ($id);
    }

}
