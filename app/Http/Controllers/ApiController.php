<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiRequest;
use App\Models\Cidade;
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
