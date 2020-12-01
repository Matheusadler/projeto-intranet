<?php

namespace App\Http\Controllers;

use App\Models\BancoImagem;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Prophecy\Call\Call;

class  ImagemController extends Controller
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

    public function index(Request $request)
    {
        $titulo = $request->filtro;
        //dd($titulo);
        $imagens = BancoImagem::where('titulo', 'like', "%$titulo%")->paginate(15);
        //dd($imagens);
        return view('admin.pages.imagem.listar', [
            'imagens' => $imagens,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imagens = BancoImagem::paginate();
        return view('admin.pages.imagem.adicionar', [
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
        if ($request->caminho->isValid()) {
            $dateNow = Carbon::now()->format('Y/m');
            //dd($dateNow);
            $path = "storage/{$request->caminho->store("imagem/$dateNow")}";

            BancoImagem::create([
                "titulo" => $request->titulo,
                "caminho" => $path,
            ]);
        }
        return redirect()->route('imagem.index');
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
