<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->name = $request->get('name'); 
        $teacher->city = $request->get('city');
        $teacher->country = $request->get('country');
        $teacher->save();

        return redirect('teachersData');
        // echo '<p>data Added</p>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(teacher $teacher)
    {
        $teachers = teacher::all();
        return view('teacherData', ['teachers'=>$teachers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher, $id)
    {
        $teacher = Teacher::find($id);
        return view('editTeacher', ['teacher'=>$teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request->get('name'); 
        $teacher->city = $request->get('city');
        $teacher->country = $request->get('country');
        $teacher->save();

        return redirect('teachersData');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('teachersData');
    }

    function apiData($id=null) {
        return $id ? Teacher::find($id) : Teacher::all();
        // return Teacher::all();
    }

    function addApiData(Request $req) {

        $teacher = new Teacher;
        $teacher->name = $req->name;
        $teacher->city = $req->city;
        $teacher->country = $req->country;
        $isSave = $teacher->save();
        if($isSave) {
            return ['result'=>'Data Save Hogaya.'];
        }
        else {
            return ['result'=>'Data Save Nhi Hua.'];
        }
    }

    function updateData(Request $req) {
        $teacher = Teacher::find($req->id);
        $teacher->name = $req->name;
        $teacher->city = $req->city;
        $teacher->country = $req->country;
        $isSave = $teacher->save();
        if($isSave) {
            return ['result'=>'Data Update Hogaya.'];
        }
        else {
            return ['result'=>'Data Update Nhi Hua.'];
        }
    }

    function deleteData($id) {
        $teacher = Teacher::find($id);
        $isDelete = $teacher->delete();
        return $isDelete ? ['message'=>'Data Deleted'] : ['message'=>'Data not delete'];
    }

    function ApiValidation(Request $req) {
        $requiredFields = array(
            "name"=>"required",
            "city"=>"required",
            "country"=>"required"
        );
        $validation = Validator::make($req->all(), $requiredFields);
        if($validation->fails()) {
            // return $validation->errors();
            return response()->json($validation->errors(), 401);
        }
        else {
            $teacher = new Teacher;
            $teacher->name = $req->name;
            $teacher->city = $req->city;
            $teacher->country = $req->country;
            $isValidate = $teacher->save();
            if($isValidate) {
                return ['result'=>'Data Saved.'];
            }
            else {
                return ['result'=>'Data Not Saved.'];
            }
        }
    }
}
