<?php

namespace App\Http\Controllers;

use App\subject_user;
use Illuminate\Http\Request;

class SubjectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjectUser = SubjectUser::all();
        return $subject_user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjectUser = new SubjectUser();
        $subjectUser->name = $request->name;
        $subjectUser->year = $request->year;
        $subjectUser->dictation = $request->dictation;
        $subjectUser->type = $request->type;
        $subjectUser->save();
        return $subjectUser;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject_user  $subject_user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $year)
    {
        $subjectUser = SubjectUser::where('year', '=',$year)->get();
        return $subjectUser;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject_user  $subject_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject_user $subject_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject_user  $subject_user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjectUser = SubjectUser::find($id);
        $subjectUser->delete();
    }
}
