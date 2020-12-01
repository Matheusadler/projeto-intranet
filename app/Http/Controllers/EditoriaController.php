<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditoriaRequest;
use App\Models\Editoria;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EditoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $editorias = Editoria::all();
        return view('admin.pages.editoria.listar', [
            'editorias' => $editorias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function create()
    {
        //
        $editorias = Editoria::all();
        return view('admin.pages.editoria.adicionar', [
            'editorias' => $editorias,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EditoriaRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EditoriaRequest $request)
    {
        //
        //dd($request->editoria);
        Editoria::create([
            "nome" => $request->nome,
            "slug" => $request->slug,
            "editoria_pai" => $request->editoria,
        ]);
        return redirect()->route('editoria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        //
        $editorias = Editoria::all();
        if (!$editoria = Editoria::find($id))
            return redirect()->back();
        return view('admin.pages.editoria.editar', [
            'editorias' => $editoria,
            'editorias_list' => $editorias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditoriaRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        //
        //dd($request->editoria);
        /*$this->validate($request, [
            'nome' => 'required'
        ]);*/
        if (!$editoria = Editoria::find($id))
            return redirect()->back();
        $editoria->nome = $request->nome;
        $editoria->slug = $request->slug;
        $editoria->editoria_pai = $request->editoria;
        $editoria->save();
        //dd($noticia);
        return redirect()->route('editoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        if (!$editoria = Editoria::find($id))
            return redirect()->back();
        $editoria->delete();
        return redirect()->route('editoria.index');
    }
}
