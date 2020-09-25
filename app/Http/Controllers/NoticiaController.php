<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationNoticiasRequest;
use App\Models\BancoImagem;
use App\Models\Noticia;
use App\Models\Editoria;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


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
     * @param  App\Http\Requests\ValidationNoticiasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationNoticiasRequest $request)
    {
        //dd($request->all());
        $request->autor = Auth::user()->name;
        //dd($request->autor);
        //dd($request->all());
        //dd($request->all());
        //dd(Carbon::createFromFormat('d-m-Y H:i:s', $request->data_inicial));
        Noticia::create([
            "chapeu" => $request->chapeu,
            "setor" => $request->setor,
            "titulo_interno" => $request->titulo_interno,
            "titulo_capa" => $request->titulo_capa,
            "subtitulo" => $request->subtitulo,
            "texto" => $request->texto,
            "data_inicial" => Carbon::createFromFormat('d/m/Y H:i:s', $request->data_inicial),
            "data_final" => Carbon::createFromFormat('d/m/Y H:i:s', $request->data_final),
            "editoria_id" => $request->editoria,
            "banco_imagem_id" => $request->imagem,
            "autor" => $request->autor,
            "legenda" => $request->legenda,
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
     * 
     */
    public function edit($id)
    {
        //
        $editorias = Editoria::all();
        $imagens = BancoImagem::all();
        if (!$noticia = Noticia::find($id))
            return redirect()->back();
        return view('admin.pages.noticia.editar', [
            'noticias' => $noticia,
            'editorias' => $editorias,
            'imagens' => $imagens,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ValidationNoticiasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationNoticiasRequest $request, $id)
    {
        //
        if (!$noticia = Noticia::find($id))
            return redirect()->back();
        $noticia->chapeu = $request->chapeu;
        $noticia->setor = $request->setor;
        $noticia->titulo_interno = $request->titulo_interno;
        $noticia->titulo_capa = $request->titulo_capa;
        $noticia->subtitulo = $request->subtitulo;
        $noticia->texto = $request->texto;
        $noticia->data_inicial = Carbon::createFromFormat('d/m/Y', $request->data_inicial);
        $noticia->data_final = Carbon::createFromFormat('d/m/Y', $request->data_final);
        $noticia->editoria_id = $request->editoria;
        $noticia->banco_imagem_id = $request->imagem;
        $noticia->save();
        //dd($noticia);
        return redirect()->route('noticia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $noticia = Noticia::findOrFail($request->noticia_id);
        $noticia->delete();

        return redirect()->route('noticia.index');
    }
}
