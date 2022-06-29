<?php

namespace App\Http\Controllers;
use App\Models\Linha;
use Illuminate\Http\Request;

class PublicoDetalheDaLinhaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        return view('/publico/detalheDaLinha', $this->getParadasEHorarios($request->linha_id));
    }
    /*
    * Funcao responsavel 
    */
    private function getParadasEHorarios($linha_id){
        $linha = Linha::where('id', $linha_id)->get(["nome", "numero", "valor", "aviso", "tempo_de_espera"]);
        $body = ['empresa' => [0], 'linha'=>$linha[0], 'paradas'=>[0], 'horarios'=>[0]];
        return $body;
    }
}
