@extends('layouts.appBase')

@section('title','Home Notes')


@section('content')
    <a href="{{route('note.create')}}"> Create new Note</a>
    <ul>

        @forelse($noteDB as $n)

            <li>{{$n->title}} <a href="{{route('note.edit',$n)}}"> Update |</a>
                <a href="{{route('note.show',['note'=>$n])}}">Show |</a>
                <a>
                    <form method="post" action="{{route('note.destroy',['note'=>$n])}}">
                        @csrf
                        @method('DELETE')
                        <div>     <input type="submit" value="delete"></div>

                    </form>
                </a>


                @empty
                    <p>no hay notas para mostrar</p>
                @endforelse

            </li></ul>
@endsection
