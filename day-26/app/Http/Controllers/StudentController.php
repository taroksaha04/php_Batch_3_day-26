<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\Console\Style\success;

class StudentController extends Controller
{
    protected  $students;
    protected $student;
    public function index()
    {
        return view('add-student');
    }
    public function create(Request $request)
    {
        //return $request->all();

        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();
//oi page ei dekhabe je data insert success hoiche
        return redirect()->back()->with('message','student info save successfully.');
    }
}
