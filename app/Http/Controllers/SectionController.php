<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;


class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::withCount('books')->get();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        return view('sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
    ]);


        Section::create($request->only(['name','description']));
        return redirect()->route('sections.index')->with('success', 'Section created.');
    }

    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate([
        'name' => 'required|string|max:255',
    ]);


        $section->update($request->only(['name','description']));
        return redirect()->route('sections.index')->with('success', 'Section updated.');
    }


    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index')->with('success', 'Section deleted.');
    }
}