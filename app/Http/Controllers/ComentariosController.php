<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comentarios;

class ComentariosController extends Controller
{
    /**
     * Mostrar Comentarios
     * 
     */
    public function comentarios(Request $request){
        $comentarios = new comentarios();
        $comentarios->Nombre = auth()->user()->name;
        $comentarios->Comentario = $request->message;
        $comentarios->Fecha = date('Y-m-d H:i:s');
        $comentarios->id_usuario = auth()->user()->id;
        $comentarios->save();
        
        $comentarios = comentarios::all();
        $coments = comentarios::count();

        return redirect()->route('blog');
    }

    /**
     * Mostrar Blog
     * 
     */
    public function blog(Request $request){
        $comentarios = comentarios::all();
        $coments = comentarios::count();
        return view('blog.blog',['comentarios' => $comentarios,'coments' => $coments]);
    }
}
