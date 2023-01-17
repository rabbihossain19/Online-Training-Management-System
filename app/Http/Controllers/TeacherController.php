<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $teachers, $teacher;
    public function index()
    {
        return view('admin.teacher.index');
    }
    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect('/dashboard/add-teacher')->with('message', 'Teacher Info Create Successfully');
    }

    public function manage()
    {
        $this->teachers     = Teacher::all();
        return view('admin.teacher.manage', ['teachers' => $this->teachers]);
    }
    public function edit($id)
    {
        $this->teacher      = Teacher::find($id);
        return view('admin.teacher.edit', ['teacher' => $this->teacher]);
    }
    public function update(Request $request, $id)
    {
        Teacher::teacherInfoUpdate($request, $id);
        return redirect('/dashboard/manage-teacher')->with('message', 'Teacher Info Update Successfully');
    }
    public function delete($id)
    {
        Teacher::teacherInfoDelete($id);
        return redirect('/dashboard/manage-teacher')->with('message', 'Teacher Info Delete Successfully');
    }
}
