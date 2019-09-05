<?php

namespace App\Http\Controllers;
use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    /**
     * Display a listing of the users
     *
     * @param  \App\Aluno  $model
     * @return \Illuminate\View\View
     */
    public function index(Aluno $model)
    {
        return view('alunos.index', ['alunos' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('alunos.create');
    }
     /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\AlunoRequest  $request
     * @param  \App\Aluno  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $aluno = new Aluno;
        $aluno->nome = $request->nome;
        $aluno->nmatricula = $request->nmatricula;
        $aluno->statuss = $request->statuss;
        $aluno->save();
        return redirect()->route('Aluno.index')->withStatus(('Aluno Cadastrado Com Sucesso.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $aluno=Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,$id)
    {
        $aluno=Aluno::findOrFail($id);
        $aluno->nome = $request->nome;
        $aluno->nmatricula = $request->nmatricula;
        $aluno->statuss = $request->statuss;
        $aluno->save();


        return redirect()->route('Aluno.index')->withStatus(__('Aluno Alterado Com Sucesso.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $aluno=Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('Aluno.index')->withStatus(__('Aluno excluido com sucesso.'));
    }
}
