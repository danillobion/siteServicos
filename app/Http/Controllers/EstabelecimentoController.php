<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use App\Models\Endereco;
use App\Models\Estabelecimentoeendereco;
use Illuminate\Http\Request;

class EstabelecimentoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /*
     * Funcao responsavel por carregar a tela principal do estabelecimento
     */
    public function index(){
        $body = ['estabelecimentos'=>$this->getAllEstabelecimentos()];
        return view('layouts/estabelecimento/index',$body);
    }
      /*
    * Funcao responsavel por salvar o novo registro
    */
    public function salvarEstabelecimento(Request $request){
        //cadastra o estabelecimento
        $estabelecimento = Estabelecimento::create([
            'nome' => $request->nome_estabelecimento,
            'descricao' => $request->descricao_estabelecimento,
            'tipo' => $request->tipo_estabelecimento,
        ]);
        //cadastro o endereco
        $endereco = Endereco::create([
            'cep' => $request->cep_estabelecimento,
            'estado' => $request->estado_estabelecimento,
            'cidade' => $request->cidade_estabelecimento,
            'bairro' => $request->bairro_estabelecimento,
            'rua' => $request->rua_estabelecimento,
            'numero' => $request->numero_estabelecimento,
            'complemento' => $request->complemento_estabelecimento,
            'latitude' => $request->latitude_estabelecimento,
            'longitude' => $request->longitude_estabelecimento,
        ]);
        //cadastra a relacao entre estabelecimento e o endereco
        Estabelecimentoeendereco::create([
            'estabelecimento_id' => $estabelecimento->id,
            'endereco_id' => $endereco->id,
        ]);


        // Cidadeeempresa::create(['cidade_id' => 1, 'empresa_id' => $empresa->id]); //Alterar no futuro para receber qualquer cidade
        // $body = ['status'=>$empresa, "empresas" => $this->getAllEmpresas()];
        // return $body;
        // return  json_encode($this->getAllEstabelecimentos());
        echo json_encode($estabelecimento);
    }

    private function getAllEstabelecimentos(){
        $listaDeEstabelecimentos = [];
        $estabelecimentos = Estabelecimento::get();
        
        foreach ($estabelecimentos as $key => $value) {
            $estabelecimentoeendereco = Estabelecimentoeendereco::where("estabelecimento_id", $value->id)->get();
            $endereco = Endereco::where("id", $estabelecimentoeendereco[0]->endereco_id)->get();
            $dados = array(
                'id' => $value->id,
                'nome' => $value->nome,
                'descricao' => $value->descricao,
                'tipo' => $value->tipo,
                'cep' => $endereco[0]->cep,
                'estado' => $endereco[0]->estado,
                'cidade' => $endereco[0]->cidade,
                'bairro' => $endereco[0]->bairro,
                'rua' => $endereco[0]->rua,
                'numero' => $endereco[0]->numero,
                'complemento' => $endereco[0]->complemento,
                'latitude' => $endereco[0]->latitude,
                'longitude' => $endereco[0]->longitude,
            );
            //add estabelecimento ao array
            array_push($listaDeEstabelecimentos, $dados);
        }
        return $listaDeEstabelecimentos;
    }

    /*
    * Funcao responsavel por listar as informacoes de um estabelecimento selecionado
    */
    public function editarEstabelecimento(Request $request){
        $estabelecimentos = Estabelecimento::where('id',$request->estabelecimento_id)->get();
        $estabelecimentoeendereco = Estabelecimentoeendereco::where("estabelecimento_id", $estabelecimentos[0]->id)->get();
        $endereco = Endereco::where("id", $estabelecimentoeendereco[0]->endereco_id)->get();
        $dados = array(
            'id' => $estabelecimentos[0]->id,
            'nome' => $estabelecimentos[0]->nome,
            'descricao' => $estabelecimentos[0]->descricao,
            'tipo' => $estabelecimentos[0]->tipo,
            'cep' => $endereco[0]->cep,
            'estado' => $endereco[0]->estado,
            'cidade' => $endereco[0]->cidade,
            'bairro' => $endereco[0]->bairro,
            'rua' => $endereco[0]->rua,
            'numero' => $endereco[0]->numero,
            'complemento' => $endereco[0]->complemento,
            'latitude' => $endereco[0]->latitude,
            'longitude' => $endereco[0]->longitude,
        );
        echo json_encode($dados);
    }
    /*
    * Funcao responsavel por atualizar as informacoes de um estabelecimento selecionado
    */
    public function atualizarEstabelecimento(Request $request){
        //atualizar dados do estabelecimento
        Estabelecimento::where('id',$request->estabelecimento_id)->update([
            'nome' => $request->nome_estabelecimento,
            'descricao' => $request->descricao_estabelecimento,
            'tipo' => $request->tipo_estabelecimento,
        ]);
        //localizar endereco do estabelecimento
        $estabelecimentoeendereco = Estabelecimentoeendereco::where("estabelecimento_id", $request->estabelecimento_id)->get();
        //atualizar endereco do estabelecimento
        Endereco::where("id", $estabelecimentoeendereco[0]->endereco_id)->update([
            'cep' => $request->cep_estabelecimento,
            'estado' => $request->estado_estabelecimento,
            'cidade' => $request->cidade_estabelecimento,
            'bairro' => $request->bairro_estabelecimento,
            'rua' => $request->rua_estabelecimento,
            'numero' => $request->numero_estabelecimento,
            'complemento' => $request->complemento_estabelecimento,
            'latitude' => $request->latitude_estabelecimento,
            'longitude' => $request->longitude_estabelecimento,
        ]);
        $body = ['status'=>true, 'estabelecimentos'=>$this->getAllEstabelecimentos()];
        echo json_encode($body);
    }
    /*
    * Funcao responsavel por deletar o estabelecimento selecionado
    */
    public function deletarEstabelecimento(Request $request){
        $estabelecimentos = Estabelecimento::where('id',$request->estabelecimento_id)->get();
        $estabelecimentoeendereco = Estabelecimentoeendereco::where("estabelecimento_id", $estabelecimentos[0]->id)->get();

        Endereco::where("id", $estabelecimentoeendereco[0]->endereco_id)->delete();
        Estabelecimentoeendereco::where("estabelecimento_id", $estabelecimentos[0]->id)->delete();
        Estabelecimento::where('id',$request->estabelecimento_id)->delete();

        $body = ['status'=>true, 'estabelecimentos'=>$this->getAllEstabelecimentos()];
        echo json_encode($body);
    }
}
