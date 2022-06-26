<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimentoeparada;
use App\Models\Parada;
use Illuminate\Http\Request;

class EstabelecimentoEParadaController extends Controller
{
    /*
     * Funcao responsavel por carregar a tela principal com a lista de paradas
     */
    public function index($estabelecimento_id){
        $body = [
            'estabelecimento_id'=>$estabelecimento_id,
            'paradas'=>$this->getAllParadasEstabelecimento($estabelecimento_id),
            'todasAsParadas'=>Parada::orderBy('rua')->get(),
        ];
        return view('layouts/estabelecimentoeparadas/index',$body);
    }
    /*
    * Funcao responsavel por pegar as paradas de um estabelecimento selecionado
    */
    private function getAllParadasEstabelecimento($estabelecimento_id){
        $listaDeParadas = [];
        $paradas = Estabelecimentoeparada::where("estabelecimento_id", $estabelecimento_id)->get();
        foreach ($paradas as $key => $value) {
            $paradas = Parada::where("id", $value->parada_id)->get();
            array_push($listaDeParadas, $paradas[0]);
        }
        return $listaDeParadas;
    }
    /*
    * Funcao responsavel salvar a parada selecionada
    */
    public function salvarParada(Request $request){
        $estabelecimento_id = $request->estabelecimento_id;
        $parada_id = $request->parada_id;
        Estabelecimentoeparada::create(['estabelecimento_id' => $estabelecimento_id, 'parada_id'=>$parada_id]);
        $body = [
            'paradas'=>$this->getAllParadasEstabelecimento($estabelecimento_id),
        ];
        echo json_encode($body);
    }
    /*
    * Funcao responsavel remover a parada selecionada
    */
    public function deletarParada(Request $request){
        $estabelecimento_id = $request->estabelecimento_id;
        $parada_id = $request->parada_id;
        Estabelecimentoeparada::where('estabelecimento_id', $estabelecimento_id)->where('parada_id', $parada_id)->delete();
        $body = [
            'paradas'=>$this->getAllParadasEstabelecimento($estabelecimento_id),
        ];
        echo json_encode($body);
    }
}
