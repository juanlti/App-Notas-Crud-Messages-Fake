@extends('layouts.appBase')


@section('title','Show Note')

@section('content')

    <a href="{{route('note.index')}}"> Back</a>
    <H1>{{$note->title}}</H1>
    <p>{{$note->description}}</p>



@endsection
