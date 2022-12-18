@extends('layout')


@section('content')
    

<h1><?php echo ''.$heading ?></h1>

<?php foreach ($students as $student):  ?>
     
<h2> <?php  echo $student['id']." ".$student['name']." ".$student['age']   ; ?></h2>

<?php     endforeach ;          ?>


<h1> {{$heading}}</h1>
@foreach ($students as $student )
    
<h2>{{$student['id']}} {{" "}}{{$student['name']}}{{" "}}{{$student['age']}} </h2>
    
@endforeach

@endsection