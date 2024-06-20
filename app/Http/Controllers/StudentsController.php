<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nobp' => 'required|unique:App\Models\Student,nobp|size:14',
            'email' => 'required|unique:App\Models\Student,email|email',
            'jurusan' => 'required'
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'nobp.required' => 'No Bp tidak boleh kosong!',
            'nobp.unique' => 'No Bp sudah terdaftar!',
            'nobp.size' => 'No Bp salah!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.unique' => 'Email sudah terdaftar!',
            'email.email' => 'Email harus benar!',
            'jurusan.required' => 'Jurusan tidak boleh kosong!'
        ]);
        Student::create($request->all());
        return redirect('/students')->with('green', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nobp' => 'required|size:14',
            'email' => 'required|email',
            'jurusan' => 'required'
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'nobp.required' => 'No Bp tidak boleh kosong!',
            'nobp.size' => 'No Bp salah!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email harus benar!',
            'jurusan.required' => 'Jurusan tidak boleh kosong!'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nobp' => $request->nobp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/students')->with('green', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('red', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
