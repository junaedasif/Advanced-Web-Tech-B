<!-- <?php
    $name = "Akkas Ali";
?> -->
@extends('layouts.loggedin')
@section('content')
@php
    $test = htmlspecialchars("<h1 style='color:red'>Akkas Ali</h1>");
    $name = "<script>alert('Hello Boss')</script><h1 style = 'color:red'>Abu Junaed Mohd Asif</h1>";
@endphp

<h1>Create</h1>
{{-- <h2> <?php echo $name;?> </h2>
<h2>{{$name}}</h2> --}}

 <div><?php echo $name;?></div>
 <div>{{$name}}</div> 
 <div><?php echo $test;?></div>
 <div>{{$test}}</div>
 @endsection