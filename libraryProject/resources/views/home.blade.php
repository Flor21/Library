@extends('layouts.app')

@section('content')
    <div class="container">
        <subjects></subjects>
        <br>
        <b-row>
            <b-col cols="8"></b-col>
            <b-col cols="2"></b-col>
            <b-col col lg="2">
                <my-section></my-section>
            </b-col>
        </b-row>  
        <list-subjects></list-subjects>
    </div>
@endsection