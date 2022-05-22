<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRequest;
use App\Models\Cidade;
use App\Models\Cidadeeempresa;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Linha;
use App\Models\Parada;
use App\Models\Horario;
use App\Models\Linhaeparada;
use Exception;

class ApiController extends Controller
{
    public function transporteColetivo(Request $request){
        $listaEmpresas = Empresa::get(['id','nome']);
        $listaLinhas = Linha::get(['id','empresa_id','nome','numero','tempo_de_espera','valor']);
        $listaParadas = Parada::get(['id','rua','latitude','longitude']);
        $listaHorarios = Horario::get(['linha_id','dia','horario_bairro','horario_centro']);
        $listaLinhaseparadas = Linhaeparada::get(['ordem', 'linha_id','parada_id']);

        $dados = ['empresas'=>$listaEmpresas,'linhas'=>$listaLinhas,'paradas'=>$listaParadas,'horarios'=>$listaHorarios,'linha_parada'=>$listaLinhaseparadas,];
        $body = ['dados'=>$dados, 'status'=>true, 'cidade'=>'Garanhuns/PE', 'dataAtualizacao'=>date("d.m.y"), 'versaoDoSistema' => "1.0"];
        echo json_encode($body);
    }
    /*
    * Funcao responsavel por gerar a lista de linhas
    */
    public function getTodasAsLinhas(Request $request){
        $listaDeLinhas = [];
        $cidade_id = Cidade::where('id', $request->cidade_id)->get('id')[0]->id;
        $empresas = Cidadeeempresa::where('cidade_id', $cidade_id)->get('empresa_id');

        
        foreach ($empresas as $key => $value) {
            $empresa_id = $value->empresa_id;
            //pegar as informações das linhas
            $linhas = Linha::where('empresa_id',  $empresa_id)->get();
            foreach ($linhas as $key => $value) {
                //pegar o nome da empresa que tem as linhas
                $empresa = Empresa::where('id',  $empresa_id)->get();
                //prepara o body
                $dados = array(
                    'status' => true,
                    'empresa_id'  => $empresa_id,
                    'empresa_nome'  => $empresa[0]->nome,
                    'linha_id'  => $value->id,
                    'linha_nome'  =>$value->nome,
                    'linha_numero'  => $value->numero,
                    'linha_tempo_de_espera'  => $value->tempo_de_espera,
                    'linha_valor'  => $value->valor,
                );
                //add cada linha + empresa a um array
                array_push($listaDeLinhas, $dados);
            }
        }
        $body = array(
            'success' => true,
            'dados'  => $listaDeLinhas,
        );
        echo json_encode($body);
    }
    /*
    * Funcao responsavel por pegar as informacoes de uma linha (parada e horario)
    */
    public function getInfoLinha(Request $request){
        $linha_id = $request->linha_id;
        $paradas = [];

        $infoLinha = Linha::where('id',  $linha_id)->get()[0];
        $infoEmpresa = Empresa::where('id',  $infoLinha->empresa_id)->get()[0];

        $listaDeParadas = Linhaeparada::where('linha_id',  $linha_id)->get('parada_id');
        $horarios = Horario::where('linha_id',  $linha_id)->get();

        foreach ($listaDeParadas as $key => $value) {
            $paradaSelecionada = Parada::where('id',  $value->parada_id)->get()[0];
            array_push($paradas,$paradaSelecionada);
        }
        
        $body = array(
            'success' => true,
            'paradas'  => $paradas,
            'horarios'  => $horarios,
            
        );
        echo json_encode($body);
    }
    /*
    * Funcao responsavel por pegar todas as linhas que passam em uma determinada parada
    */
    public function getTodasAsLinhasDeUmaDeterminadaParada(Request $request){
        $parada_id = $request->parada_id;
        $linhas = [];
        $listaDeLinhas = Linhaeparada::where('parada_id',  $parada_id)->get('linha_id');
        foreach ($listaDeLinhas as $key => $value) {
            $linhaSelecionada = Linha::where('id',  $value->linha_id)->get()[0];
            //prepara o body
            $body = array(
                'success' => true,
                'empresa_nome'  => $linhaSelecionada->nome,
                'linha_id'  =>$linhaSelecionada->id,
                'linha_nome'  => $linhaSelecionada->nome,
                'linha_numero'  => $linhaSelecionada->numero,
                'linha_tempo_de_espera'  => $linhaSelecionada->tempo_de_espera,
                'linha_valor'  => $linhaSelecionada->valor,
            );
            array_push($linhas,$body);
        }
        echo json_encode($linhas);
    }

    public function getAll(ApiRequest $request){
        try{
            $dados = $request->validated();

            $cidade = Cidade::with(
                'empresas', 
                'empresas.linhas', 
                'empresas.linhas.paradas', 
                'empresas.linhas.horarios'
            )->find($dados['cidade_id']);

            return response(array(
                'success' => true,
                'dados' => $cidade
            ), 200);

        }catch(Exception $err){
            return response(array(
                'success' => false,
                'error' => $err->getMessage()
            ), 400);
        }
    } 

}
