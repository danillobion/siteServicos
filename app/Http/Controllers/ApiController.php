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
use App\Models\Historicodeposicoes;
use App\Models\Estabelecimento;
use App\Models\Estabelecimentoeparada;
use App\Models\Statusdosistemas;
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
        $statusDoSistema = Statusdosistemas::get();

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
                    'linha_aviso'  => $value->aviso,
                );
                //add cada linha + empresa a um array
                array_push($listaDeLinhas, $dados);
            }
        }
        $body = array(
            'success' => true,
            'dados'  => $listaDeLinhas,
            'sistema' =>$statusDoSistema,
        );
        echo json_encode($body);
    }
    /*
    * Funcao responsavel por pegar as informacoes de uma linha (parada e horario)
    */
    public function getInfoLinha(Request $request){
        $linha_id = $request->linha_id;
        $paradas = [];

        $listaDeParadas = Linhaeparada::where('linha_id',  $linha_id)->get();
        $horarios = Horario::where('linha_id',  $linha_id)->get();

        foreach ($listaDeParadas as $key => $valueParada) {
            $paradaSelecionada = Parada::where('id',  $valueParada->parada_id)->get()[0];
            $referencias  = [];
            $estabelecimentoeparada = Estabelecimentoeparada::where("parada_id", $valueParada->parada_id)->get();
            foreach ($estabelecimentoeparada as $key => $value) {
                $estabelecimento = Estabelecimento::where("id", $value->estabelecimento_id)->get();
                array_push($referencias,$estabelecimento[0]->nome);
            }
            $body = array(
                'id' => $paradaSelecionada->id,
                'rua'  => $paradaSelecionada->rua,
                'numero'  => $paradaSelecionada->numero,
                'latitude'  => $paradaSelecionada->latitude,
                'longitude'  => $paradaSelecionada->longitude,
                'sentido'  => $valueParada->sentido,
                'referencia'  => implode(", ", $referencias),
            );
            array_push($paradas,$body);
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
        $listaDeLinhas = Linhaeparada::where('parada_id',  $parada_id)->distinct()->get('linha_id');

        foreach ($listaDeLinhas as $key => $value) {
            $linhaSelecionada = Linha::where('id',  $value->linha_id)->get()[0];
            $infoEmpresa = Empresa::where('id',  $linhaSelecionada->empresa_id)->get()[0];
            //prepara o body
            $body = array(
                'success' => true,
                'empresa_nome'  => $infoEmpresa->nome,
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
    /*
    * Funcao responsavel por receber a posicao do usuario
    */
    public function setPosicao(Request $request){
        try {
            $body = array(
                'usuario_id' => $request->usuario_id,
                'linha_id' => $request->linha_id,
                'latitude'  =>$request->latitude,
                'longitude'  =>$request->longitude,
                'accuracy'  => $request->accuracy,
                'timestamp'  => date('d/m/Y H:i:s', $request->timestamp),
                'tipo'  => $request->tipo,
            );
            $resultado = Historicodeposicoes::create($body);
            if(isset($resultado)){
                return response(array(
                    'success' => true,
                    'acao' => "1"
                ), 200);
            }else{
                return response(array(
                    'success' => false,
                    'acao' => "0"
                ), 400);
            }
        } catch (Exception $err){
            return response(array(
                'success' => false,
                'message' => $err->getMessage(),
                'acao' => "4"
            ), 400);
        }
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
