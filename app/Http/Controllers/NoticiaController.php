<?php

namespace App\Http\Controllers;

use App\Models\BancoImagem;
use App\Models\Noticia;
use App\Models\Editoria;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $noticias = Noticia::all();
        return view('admin.pages.noticia.listar', [
            'noticias' => $noticias,
        ]);
        /*
        $noticias = Noticia::all();
        dd($noticias->all());

        return view('admin.pages.noticia.listar_noticia', [
            'noticias' => $noticias,
        ]);
        echo ('teste');*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $editorias = Editoria::all();
        $imagens = BancoImagem::all();
        return view('admin.pages.noticia.adicionar', [
            'editorias' => $editorias,
            'imagens' => $imagens,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Noticia::create([
            "chapeu" => $request->chapeu,
            "setor" => $request->setor,
            "titulo_interno" => $request->titulo_interno,
            "titulo_capa" => $request->titulo_capa,
            "subtitulo" => $request->subtitulo,
            "texto" => $request->texto,
            "data_inicial" => Carbon::createFromFormat('d/m/Y', $request->data_inicial),
            "data_final" => Carbon::createFromFormat('d/m/Y', $request->data_final),
            "editoria_id" => $request->editoria,
            "banco_imagem_id" => $request->imagem,
        ]);

        return redirect()->route('noticia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
