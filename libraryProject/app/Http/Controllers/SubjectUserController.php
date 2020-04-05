<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\subject_user;
use Illuminate\Http\Request;

class SubjectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $user = Auth::user();
        $subjectUser = $user->subjects()->get();
        return response()->json($subjectUser);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = $request->all();
        //$data['user_id'] = Auth::user()->id; 
        //$subjectUser = new subject_user($data);
        //$subjectUser->save();
        //return Auth::user()->id;

       $subjectUser = new subject_user();
        $subjectUser -> user_id = Auth::id();
        $subjectUser -> subject_id = $request->subject_id;
        $subjectUser -> state = $request->state;
        $subjectUser->save();
        return $subjectUser;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject_user  $subject_user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $subject_id)
    {
        $subjectUser = subject_user::where('subject_id', '=',$subject_id)->get();
        return $subjectUser;
        //$subjectUser = subject_user::where('year', '=',$year)->get();
        //return $subjectUser;
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
        $subjectUser = subject_user::find($id);
        $subjectUser->delete();
    }
}
