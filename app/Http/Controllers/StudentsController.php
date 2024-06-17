<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index',['data_students'=> Students::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = DB::table('types')->get();
        return view('students.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        $name = $request->input('StudentName');
        $type_id = $request->input('TypeStudent');
        $birthday = $request->input('BirthdayStudent');
        $gender = $request->input('GenderStudent');
        $phone = $request->input('PhoneStudent');
        $email = $request->input('EmailStudent');
        $address =$request->input('AddressStudent');

        DB::table('students')->insert([
            'name'=>$name,
            'type_id'=>$type_id,
            'birthday'=>$birthday,
            'gender'=>$gender,
            'phone_number'=>$phone,
            'email'=>$email,
            'address'=>$address
        ]);
        return redirect()->route('students.index')->with('success','Student Added success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $student)
    {
        $data_student = $student;
        return view('students.show',compact('data_student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $student)
    {
        $types = DB::table('types')->get();
        return view('students.edit',[
            'types'=>$types,
            'data_student'=>$student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, $id)
    {
        $name = $request->input('StudentName');
        $type_id = $request->input('TypeStudent');
        $birthday = $request->input('BirthdayStudent');
        $gender = $request->input('GenderStudent');
        $phone = $request->input('PhoneStudent');
        $email = $request->input('EmailStudent');
        $address =$request->input('AddressStudent');

        DB::table('students')->where('id',$id)->update([
            'name'=>$name,
            'type_id'=>$type_id,
            'birthday'=>$birthday,
            'gender'=>$gender,
            'phone_number'=>$phone,
            'email'=>$email,
            'address'=>$address
        ]);
        return redirect()->route('students.index')->with('success','Student updated success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect()->route('students.index')->with('success','Student deleted success');

    }
}
