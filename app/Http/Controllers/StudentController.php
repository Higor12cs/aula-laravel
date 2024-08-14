<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        return view('students.index', [
            'students' => Student::query()
                ->with('course')
                ->latest()
                ->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('students.create', [
            'courses' => Course::query()
                ->orderBy('name')
                ->get(),
        ]);
    }

    public function store(StudentRequest $request): RedirectResponse
    {
        Student::create($request->validated());

        return to_route('students.index')->with('success', 'Aluno criado com sucesso!');
    }

    public function show(Student $student): View
    {
        return view('students.show', [
            'student' => $student,
            'courses' => Course::query()
                ->orderBy('name')
                ->get(),
        ]);
    }

    public function edit(Student $student): View
    {
        return view('students.edit', [
            'student' => $student,
            'courses' => Course::query()
                ->orderBy('name')
                ->get(),
        ]);
    }

    public function update(StudentRequest $request, Student $student): RedirectResponse
    {
        $student->update($request->validated());

        return to_route('students.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();

        return to_route('students.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
