@extends('layouts.loggedin')
@section('content')
<h1>List</h1>
<table border = 3>
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Dept</th>
    </tr>
    @foreach($student as $s)
    <tr>
        <td>{{$s->name}}</td>
        <td>{{$s->id}}</td>
        <td>{{$s->dept}}</td>
    </tr>
    @endforeach
</table>
@endsection