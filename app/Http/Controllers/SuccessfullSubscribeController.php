<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\StudentCourses;

class SuccessfullSubscribeController extends Controller
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
    public static function index(){
        
        return view('success');
    }

    public static function getParameters(){
        
        $id = Auth::id();
        $query = $_SERVER['QUERY_STRING'];
        $params = urldecode ( $query ) ;
        
        //we need to get the submitted courses from the query
        $params = str_replace("=on", "-", $params);
        $params = str_replace("&", "", $params);

        //the course array has all the courses a student select to subscribe
        $course[0] = strtok($params,'-');

        //add to the table
        $newCourse = new StudentCourses;
        $newCourse->id = $id;
        $newCourse->course = $course[0];
        $newCourse->save();

        //temporary variable to help us find the other courses
        $temp = $params;
        
        $count = 1;

        while($count < substr_count($temp, "-")){

            $params = strstr($params,'-');
        
            $course[$count] = strtok($params,'-');

            $params = str_replace($course[$count],"",$params);
            
            //add to the table a new course
            $newCourse = new StudentCourses;
            $newCourse->id = $id;
            $newCourse->course = $course[$count];
            $newCourse->save();

            $count++;
                
        }
        
        
    }

}
