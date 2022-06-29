<?php

namespace App\Http\Controllers;
use App\Models\Linha;
use Illuminate\Http\Request;

class PublicoHomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('publico/home',$this->getAllLinhas());
    }
    /*
    * Funcao responsavel por pegar todas as linhas de uma determinada empresa
    */
    private function getAllLinhas(){
        $linha = Linha::get(["id", "nome", "numero", "valor"]);
        $body = ['linhas'=>$linha];
        return $body;
    }
}
