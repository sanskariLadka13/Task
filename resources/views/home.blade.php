@extends('master')

@section('title','Homepage')

@section('content')

Release Movie :
<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Genre">
    <input type="text" name="cast" placeholder="Cast">
    <input type="text" name="theatres_n_time" placeholder="Theatres_n_time">
    <input type="text" name="story" placeholder="Story">
    <input type="text" name="rating" placeholder="Rating">
    {{ csrf_field() }}
    <button type = "submit">Submit</button>

</form>
<br>
<br>

Latest Releases :
<ul>
    @foreach($details as $detail)
        <li>
            <strong>{{$detail->title}}</strong>
            <br>
            Genre:-  {{$detail->content}}
            <br>
            <a href="/details/{{$detail->id}}">See detail</a>
        </li>
    @endforeach

</ul>

@endsection