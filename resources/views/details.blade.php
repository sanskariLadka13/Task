@extends('master')

@section('title',$detail->title)

@section('content')
<strong>{{$detail->title}}</strong>
<br>
<br>
<strong>Story Line :- </strong>
{{$detail->story}}<br>

<strong>Rating  :-</strong>
{{$detail->rating}}
<br>

<strong>Cast  :-</strong>
{{$detail->cast}}
<br>
<strong>Theatre and Timing  :-</strong>
{{$detail->theatres_n_time}}



@endsection