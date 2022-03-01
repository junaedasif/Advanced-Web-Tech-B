{{-- <div>
    <a href="/student/list">List</a>
    <a href="/student/create">Create</a>
    <a href="/student/get">Get</a><br>
</div> --}}

@extends('layouts.loggedin')
@section('content')
<h1>Get</h1>
<h4>Name: {{$name}}</h4>
<h4>Id: {{$id}}</h4>
{{-- <h3>Course 1: {{$course[]}}</h3> --}}

<ul>
    @for($i=0;$i<count($course);$i++)
        <li>{{$course[$i]}}</li>
    @endfor
</ul>

<ol>
    @foreach($course as $c)
        <li>({{$loop->iteration}}) {{$c}}</li>
    @endforeach
</ol>
@endsection