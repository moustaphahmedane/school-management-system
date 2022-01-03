<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::select('id', 'name', 'middle_name', 'registration', 'gender', 'grade')->get();
        return view('students.list')->with([
            'students'=> $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student = new Student;
       $student->name = $request->input('name');
       $student->middle_name = $request->input('middle_name');
       $student->registration = $request->input('registration');
       $student->gender = $request->input('gender');
       $student->grade = $request->input('grade');
       

        try {
            DB::beginTransaction();
            //logic pour enregistrer les donnees
         $create_student =     Student::create([
             'name' => $request->name,
             'middle_name' => $request->middle_name,
             'registration' => $request->registration,
             'gender' => $request->gender,
             'grade' => $request->grade
                 
         ]);


           
                $student->save();

         
            if(!$create_student){
                DB::rollBack();
                return back()->with('error', 'Il y avait une erreur ');
            }

            DB::commit();
            return redirect()->route('students.index')->with('success', 'eleve bien enregistrer');

        } catch (\Throwable $th) {
           
            DB::rollBack(); 
          
            throw $th;
        }

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
        $student = Student::whereId($id)->first();

        if (! $student) {
            return back()->with('error', 'Eleve non trouve ! ');
        }

        return view('students.edit')->with([
            'student' => $student
        ]);
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
        $student = new Student;
        $student->name = $request->input('name');
        $student->middle_name = $request->input('middle_name');
        $student->registration = $request->input('registration');
        $student->gender = $request->input('gender');
        $student->grade = $request->input('grade');
        

        try {
            DB::beginTransaction();
            //logic pour enregistrer les donnees
            $update_student =     Student::where('id', $id)->update([
                'name' => $request->name,
                'middle_name' => $request->middle_name,
                'registration' => $request->registration,
                'gender' => $request->gender,
                'grade' => $request->grade

            ]);


    
            $student->save();


            if (!$update_student) {
                DB::rollBack();
                return back()->with('error', 'Il y avait une erreur ');
            }

            DB::commit();
            return redirect()->route('students.index')->with('success', 'eleve bien modifie');
        } catch (\Throwable $th) {

            DB::rollBack();

            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $delete_student = Student::whereId($id)->delete();

            if (!$delete_student) {
                DB::rollBack();
                return back()->with('error', ' Il y avait une erreur ! ');
            }

            DB::commit();
            return redirect()->route('students.index')->with('success', 'Eleve bien supprime');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    }

