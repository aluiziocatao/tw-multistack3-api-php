<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Adocao;
use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    /**
     * Criar um novo registro de adoção
     *
     * @param PetRequest $request
     * @return Adocao
     */
    public function store(PetRequest $request){
        
        $dadosDaAdocao = $request->all();
     
        return Adocao::create($dadosDaAdocao);
    }
}
