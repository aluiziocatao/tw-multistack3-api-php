<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;


class PetController extends Controller
{
    /**
     * Retorna a lista de pets cadastrados
     *
     * @return Collection
     */
    public function index(){
       
        return Pet::get();
    }

    /**
     * Cria um pet no banco de dados
     */
    public function store(PetRequest $request){

        $dadosDoPet = $request->all();

        return Pet::create($dadosDoPet);
    }
}
