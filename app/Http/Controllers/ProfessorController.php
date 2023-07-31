<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Listar os professores no index em ordem crescente.
    public function index()
    {
        $teachers = Teacher::orderBy('nome', 'asc')->paginate(10);

        return view('professor.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Página onde vou cadastrar um novo professor
        return view('professor.create');
    }

    /**
     * Adicionar Novo Professor
     */
    public function store(Request $request)
    {
        // $teacher = new Teacher;

        // $teacher->nome = $request->nome;
        // $teacher->cpf = $request->cpf;
        // $teacher->telefone = $request->telefone;
        // $teacher->email = $request->email;
        // $teacher->curriculo = $request->curriculo;
        // $teacher->vinculoProfessor = $request->vinculoProfessor;
        // $teacher->escolaridade = $request->escolaridade;

        // $teacher->save();

        $data = $request->all();
        $data['status'] = 'a';

        Teacher::create($data);

        session()->flash('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('professor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //$teacher = Teacher::where('id', $id)->first();

        //Recuperar Professor pelo ID
        if (!$teacher = Teacher::find($id))
            return redirect()->route('professor.index');

        return view('professor.show', compact('teacher'));
    }


    // Mostrar página de edição professor
    public function edit(Teacher $teacher, string $id)
    {
        // Pegar Professor pelo ID
        if (!$teacher = $teacher->where('id', $id)->first()){
            return redirect()->route('professor.index');
        }
        return view('professor.edit', compact('teacher'));
    }



    // Atualizar Ficha Professor
    public function update(Request $request, string $id)
    {
        if (!$teacher = Teacher::find($id))
            return redirect()->route('professor.index');

            $data = $request->all();
            $teacher->update($data);

            session()->flash('message', (object)[
                'message' => 'Professor atualizado com sucesso...',
                'status' => 'success'
            ]);
            return redirect()->route('professor.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
