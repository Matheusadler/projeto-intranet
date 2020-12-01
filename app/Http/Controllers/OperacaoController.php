<?php

namespace App\Http\Controllers;

use App\Models\Operacao;
use App\Models\Promocao;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OperacaoController extends Controller
{
    //
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
        $operacoes = Operacao::all();
        return view('admin.pages.operacao.listar', [
            'operacoes' => $operacoes,
        ]);
    }
}
