@extends('layouts.appBase')

@section('title','Actualizar datos')

@section('content')
    <a href="{{route('note.index')}}">Back</a>
    <form   method="POST" action="{{route('note.update',['note'=>$note])}}">
        @method("PUT")
        @csrf
        <label> Title:</label>
        <input type="text" name="title" value="{{$note->title}}"
        {{$note->title}}
        @error('title')

        <p style="color:red">{{$message}}</p>
        @enderror
        <labeL> Description:</labeL>
        <input type="text" name="description" value="{{$note->description}}"/>
        @error('description')

        <p style="color:red">{{$message}}</p>
        @enderror

        <input type="submit" value="Update"/>
    </form>

@endsection

