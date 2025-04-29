<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Exibe a view de projetos com o Vue.js.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('projetos');
    }

    /**
     * Retorna todos os projetos como JSON.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProjetos()
    {
        return response()->json(Projeto::all());
    }
}
