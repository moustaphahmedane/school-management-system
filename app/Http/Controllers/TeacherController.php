<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::select('id', 'name', 'middle_name', 'registration', 'gender', 'email')->get();
        return view('teachers.list')->with([
            'teachers' => $teachers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.add');
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
        $teacher->name = $request->input('name');
        $teacher->middle_name = $request->input('middle_name');
        $teacher->registration = $request->input('registration');
        $teacher->gender = $request->input('gender');
        $teacher->email = $request->input('email');
        

        try {
            DB::beginTransaction();
            //logic pour enregistrer les donnees
            $create_teacher = Teacher::create([
                'name' => $request->name,
                'middle_name' => $request->middle_name,
                'registration' => $request->registration,
                'gender' => $request->gender,
                'email' => $request->email
                

            ]);


            $teacher->save();


            if (!$create_teacher) {
                DB::rollBack();
                return back()->with('error', 'Il y avait une erreur ');
            }

            DB::commit();
            return redirect()->route('teachers.index')->with('success', 'enseignant bien enregistrer');
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
        $teacher = Teacher::whereId($id)->first();

        if (!$teacher) {
            return back()->with('error', 'Enseignat non trouve ! ');
        }

        return view('teachers.edit')->with([
            'teacher' => $teacher
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

        $teacher = new Teacher;
        $teacher->name = $request->input('name');
        $teacher->middle_name = $request->input('middle_name');
        $teacher->registration = $request->input('registration');
        $teacher->gender = $request->input('gender');
        $teacher->email = $request->input('email');
        

        try {
            DB::beginTransaction();
            //logic pour enregistrer les donnees
            $update_teacher =     Teacher::where('id', $id)->update([
                'name' => $request->name,
                'middle_name' => $request->middle_name,
                'registration' => $request->registration,
                'gender' => $request->gender,
                'email' => $request->email
                

            ]);


          
            $teacher->save();


            if (!$update_teacher) {
                DB::rollBack();
                return back()->with('error', 'Il y avait une erreur ');
            }

            DB::commit();
            return redirect()->route('teachers.index')->with('success', 'enseignant bien enregistrer');
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

            $delete_teacher = Teacher::whereId($id)->delete();

            if (!$delete_teacher) {
                DB::rollBack();
                return back()->with('error', ' Il y avait une erreur ! ');
            }

            DB::commit();
            return redirect()->route('teachers.index')->with('success', 'Enseignant bien supprime');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
