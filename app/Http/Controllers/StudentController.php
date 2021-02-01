<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('index',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'major' => 'required',
            'avatar' => 'image|nullable',
            'sex' => 'required'
        ]);
        //Handle File Upload
        if($request->hasFile('avatar')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('avatar')->getClientOriginalName();
            //Get filename
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('avatar')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload image
            $request->file('avatar')->storeAs('public/storage/avatar',$fileNameToStore);
        }
        $sex = $request->input('sex');
        $student = new Student([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'age' => $request->input('age'),
            'major' => $request->input('major'),
            'avatar' => $fileNameToStore,
            'sex' => $sex[0]
        ]);

        $student->save();
        
        return redirect()->route('index')->with('success','Add student successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('show',['student' => $student]);
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
        return view('edit',['student'=>$student]);
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
        // Form validation
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'major' => 'required',
            'avatar' => 'image|nullable',
            'sex' => 'required'
        ]);
        //Handle File Upload
        if($request->hasFile('avatar')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('avatar')->getClientOriginalName();
            //Get filename
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get extension
            $extension = $request->file('avatar')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload image
            $request->file('avatar')->storeAs('public/storage/avatar',$fileNameToStore);
        }
        $sex = $request->input('sex');
        
        $student = Student::find($id);
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->age = $request->input('age');
        $student->major = $request->input('major');
        $student->sex = $sex[0];
        $student->avatar = $fileNameToStore;
        $student->save();
        
        return redirect()->route('index')->with('success','Update student successfully !');
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
        $student->delete();
        return redirect()->route('index')->with('success','Delete student successfully !');
    }

    /**
     * Login student management system
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
        if($request->input('username')=='admin' && $request->input('password')=='admin'){
            return redirect()->route('index')->with('success','Login successfully !');
        }
    }

}
