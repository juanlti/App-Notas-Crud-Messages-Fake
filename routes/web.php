<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 //reemplazo las rutas por un recurso de tipo rusa
/*
Route::get('/note/create',[NoteController::class,'create'])->name("note.create");
Route::get('/note',[NoteController::class,'index'])->name("note.index");
Route::post('/note/store',[NoteController::class,'store'])->name('note.store');
Route::get('/note/edit/{note}',[NoteController::class,'edit'])->name('note.edit');
Route::put('/note/update/{note}',[NoteController::class,'update'])->name('note.update');
Route::get('/note/show/{note}',[NoteController::class,'show'])->name('note.show');
Route::delete('/note/destroy/{note}',[NoteController::class,'destroy'])->name('note.destroy');
*/
Route::resource('/note',NoteController::class);
