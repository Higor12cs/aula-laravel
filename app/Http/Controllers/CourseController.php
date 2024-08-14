<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        return view('courses.index', [
            'courses' => Course::query()
                ->latest()
                ->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function store(CourseRequest $request): RedirectResponse
    {
        Course::create($request->validated());

        return to_route('courses.index')->with('success', 'Curso criado com sucesso!');
    }

    public function show(Course $course): View
    {
        return view('courses.show', [
            'course' => $course,
        ]);
    }

    public function edit(Course $course): View
    {
        return view('courses.edit', [
            'course' => $course,
        ]);
    }

    public function update(CourseRequest $request, Course $course): RedirectResponse
    {
        $course->update($request->validated());

        return to_route('courses.index')->with('success', 'Curso atualizado com sucesso!');
    }

    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();

        return to_route('courses.index')->with('success', 'Curso excluído com sucesso!');
    }
}
