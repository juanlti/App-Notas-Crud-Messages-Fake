@extends('layouts.appBase')



@section('title','Create Notes')

@section('content')
    <a href="{{route('note.index')}}">Back Home</a>

    <form method="post" action="{{route('note.store')}}">
        @csrf
        <label>Title: </label>
        <input type="text"  name="title">
        @error('title')
        <p style="color:red">{{$message}}</p>
        @enderror
        <label>Description: </label>
        <input type="text"  name="description">

        @error('description')
        <p style="color:red">{{$message}}</p>
        @enderror
        <input type="submit" value="Create Note" >


    </form>


    @endsection
