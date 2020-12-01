<?php

namespace App\Http\Controllers;

use App\Models\BancoImagem;
use App\Models\Editoria;
use App\Models\Noticia;
use App\Models\Promocao;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PromocaoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        //
        $promocoes = Promocao::all();
        //dd($promocoes);
        return view('admin.pages.promocao.listar', [
            'promocoes' => $promocoes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        //
        return view('admin.pages.promocao.adicionar');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //
        if ($request->imagem->isValid()) {
            $dateNow = Carbon::now()->format('Y/m');
            //dd($dateNow);
            $path = "storage/{$request->imagem->store("imagem/$dateNow")}";
            $pathRegulamento = "storage/{$request->regulamento->store("regulamento/$dateNow")}";
            Promocao::create([
                "titulo" => $request->titulo,
                "premio" => $request->premio,
                "imagem" => $path,
                "regulamento" => $pathRegulamento,
                "data_inicio" => Carbon::createFromFormat('d/m/Y H:i:s', $request->data_inicio),
                "data_fim" => Carbon::createFromFormat('d/m/Y H:i:s', $request->data_fim),
                "data_sorteio" => Carbon::createFromFormat('d/m/Y H:i:s', $request->data_sorteio),
                "quantidade" => $request->quantidade,
                "pergunta" => $request->pergunta,
                "info" => $request->info
            ]);
        }

            return redirect()->route('promocao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  void
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|RedirectResponse|View
     */
    public function edit($id)
    {
        //
        if (!$promocao = Promocao::find($id))
            return redirect()->back();
        return view('admin.pages.promocao.editar', [
            'promocoes' => $promocao,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        if (!$promocao = Promocao::find($id))
            return redirect()->back();
        $promocao->titulo = $request->titulo;
        $promocao->premio = $request->premio;
        $promocao->imagem = $request->path;
        $promocao->data_inicio = Carbon::createFromFormat('d/m/Y H:i:s', $request->data_inicio);
        $promocao->data_fim = Carbon::createFromFormat('d/m/Y H:i:s', $request->data_fim);
        $promocao->data_sorteio = Carbon::createFromFormat('d/m/Y H:i:s', $request->data_sorteio);
        $promocao->save();

        return redirect()->route('noticia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        //
        if (!$promocao = Promocao::find($id))
            return redirect()->back();
        $promocao->delete();
        return redirect()->route('promocao.index');
    }
}
