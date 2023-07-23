<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    //
    public  $title,$description,$note;
    public function index():View {
        $noteDB=Note::all();
        return view('note.index', compact("noteDB"));
    }

    public function create():View{

        return view('note.create');
    }

    public function store(NoteRequest $nr):RedirectResponse{

        //guardo los datos ya verificados

        Note::create($nr->all());

        return redirect()->route('note.index')->with('success','Note Create');
    }


    public function edit(Note $note):View{

        //instancia a modificar
        //envio los datos a una vista de edicion.blade




        return  view('note.edit',compact('note'));


    }

    public function update(NoteRequest $nr,Note $note):RedirectResponse{

        $note->update($nr->all());


        return redirect()->route('note.index')->with('success','Note Update');

    }

    public function show(Note $note):View{

        return view('note.show',compact('note'));
    }

    public function destroy(Note $note):RedirectResponse{

        $note->delete();

        return redirect()->route('note.index')->with('danger','Note Delete');
    }


}
