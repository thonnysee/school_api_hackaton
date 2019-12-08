<?php

namespace App\Http\Controllers;

use App\StudentsLessons;
use Illuminate\Http\Request;

class StudentsLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($studen_lessons = StudentsLessons::all())return response()->json($studen_lessons,'200');
        return response()->json("Data not found",'404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentsLessons  $studentsLessons
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsLessons $studentsLessons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentsLessons  $studentsLessons
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsLessons $studentsLessons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentsLessons  $studentsLessons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsLessons $studentsLessons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentsLessons  $studentsLessons
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsLessons $studentsLessons)
    {
        //
    }
}
