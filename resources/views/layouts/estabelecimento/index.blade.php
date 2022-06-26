@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h6 style="margin-top: 10px">{{ __('Estabelecimentos cadastrados no sistema') }}</h6>
                    <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalLong" onclick="limparCampos()">{{ __('Novo estabelecimento') }}</button>
                </div>
                <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover  mb-0">
                        <thead>
                          <tr>
                            <th scope="col" style="width:100%">Nome do estabelecimento</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody  id="tableEstabelecimentos" style="height: 100px;  overflow-y: auto; overflow-x: hidden; ">
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Cadastrar estabelecimento') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form id="formEstabelecimento">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nome_estabelecimento">{{ __('Nome do estabelecimento *') }}</label>
                                    <input type="text" class="form-control" id="nome_estabelecimento" name="nome_estabelecimento" placeholder="Digite o nome do estabelecimento">
                                    <span class="nome_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="descricao_estabelecimento">{{ __('Descrição') }}</label>
                                    <input type="text" class="form-control" id="descricao_estabelecimento" name="descricao_estabelecimento" placeholder="Digite a descrição do estabelecimento">
                                    <span class="descricao_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="descricao_estabelecimento">{{ __('Selecione o tipo de estabelecimento *') }}</label>
                                    <select class="form-control" id="tipo_estabelecimento" name="tipo_estabelecimento">
                                        <option value="bar">Bar</option>
                                        <option value="colegio">Colégio</option>
                                        <option value="corpo_de_bombeiro">Corpo de bombeiro</option>
                                        <option value="delegacia">Delegacia</option>
                                        <option value="faculdade">Faculdade</option>
                                        <option value="farmacia">Farmácia</option>
                                        <option value="forum">Fórum</option>
                                        <option value="hospital">Hospital</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="igreja">Igreja</option>
                                        <option value="loja">Loja</option>
                                        <option value="motel">Motel</option>
                                        <option value="parque">Parque</option>
                                        <option value="ponto_turistico">Ponto turístico</option>
                                        <option value="posto_de_gasolina">Posto de gasolina</option>
                                        <option value="posto_de_saude">Posto de saúde</option>
                                        <option value="praca">Praça</option>
                                        <option value="predio_publico">Prédio público</option>
                                        <option value="prefeitura">Prefeitura</option>
                                        <option value="restaurante">Restaurante</option>
                                      </select>
                                    <span class="descricao_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cep_estabelecimento">{{ __('CEP') }}</label>
                                    <input type="text" class="form-control" id="cep_estabelecimento" name="cep_estabelecimento" placeholder="Digite o cep do estabelecimento">
                                    <span class="cep_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="estado_estabelecimento">{{ __('Estado') }}</label>
                                    <input type="text" class="form-control" id="estado_estabelecimento" name="estado_estabelecimento" placeholder="Digite o estado do estabelecimento">
                                    <span class="estado_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cidade_estabelecimento">{{ __('Cidade') }}</label>
                                    <input type="text" class="form-control" id="cidade_estabelecimento" name="cidade_estabelecimento" placeholder="Digite o cidade do estabelecimento">
                                    <span class="cidade_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="bairro_estabelecimento">{{ __('Bairro') }}</label>
                                    <input type="text" class="form-control" id="bairro_estabelecimento" name="bairro_estabelecimento" placeholder="Digite o bairro do estabelecimento">
                                    <span class="bairro_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="rua_estabelecimento">{{ __('Rua') }}</label>
                                    <input type="text" class="form-control" id="rua_estabelecimento" name="rua_estabelecimento" placeholder="Digite o rua do estabelecimento">
                                    <span class="rua_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="numero_estabelecimento">{{ __('Número') }}</label>
                                    <input type="text" class="form-control" id="numero_estabelecimento" name="numero_estabelecimento" placeholder="Digite o número do estabelecimento">
                                    <span class="numero_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="complemento_estabelecimento">{{ __('Complemento') }}</label>
                                    <input type="text" class="form-control" id="complemento_estabelecimento" name="complemento_estabelecimento" placeholder="Digite o complemento do estabelecimento">
                                    <span class="complemento_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="latitude_estabelecimento">{{ __('Latitude') }}</label>
                                    <input type="text" class="form-control" id="latitude_estabelecimento" name="latitude_estabelecimento" placeholder="Digite a latitude do estabelecimento">
                                    <span class="latitude_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="longitude_estabelecimento">{{ __('Longitude') }}</label>
                                    <input type="text" class="form-control" id="longitude_estabelecimento" name="longitude_estabelecimento" placeholder="Digite a longitude do estabelecimento">
                                    <span class="longitude_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{ __('Cancelar') }}</button>
                <button type="button" class="btn btn-success" id="botaoSalvar" onclick="cadastrarEstabelecimento()">{{ __('Salvar') }}</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalAtualizarEstabelecimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Editar empresa') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form id="formEmpresaAtualizar">
                        @csrf
                        <input type="hidden" id="editar_id_estabelecimento" name="editar_id_estabelecimento">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_nome_estabelecimento">{{ __('Nome do estabelecimento *') }}</label>
                                    <input type="text" class="form-control" id="editar_nome_estabelecimento" name="editar_nome_estabelecimento" placeholder="Digite o nome do estabelecimento">
                                    <span class="editar_nome_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_descricao_estabelecimento">{{ __('Descrição') }}</label>
                                    <input type="text" class="form-control" id="editar_descricao_estabelecimento" name="editar_descricao_estabelecimento" placeholder="Digite a descrição do estabelecimento">
                                    <span class="editar_descricao_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_descricao_estabelecimento">{{ __('Selecione o tipo de estabelecimento *') }}</label>
                                    <select class="form-control" id="editar_tipo_estabelecimento" name="editar_tipo_estabelecimento">
                                        <option value="bar">Bar</option>
                                        <option value="colegio">Colégio</option>
                                        <option value="corpo_de_bombeiro">Corpo de bombeiro</option>
                                        <option value="delegacia">Delegacia</option>
                                        <option value="faculdade">Faculdade</option>
                                        <option value="farmacia">Farmácia</option>
                                        <option value="forum">Fórum</option>
                                        <option value="hospital">Hospital</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="igreja">Igreja</option>
                                        <option value="loja">Loja</option>
                                        <option value="motel">Motel</option>
                                        <option value="parque">Parque</option>
                                        <option value="ponto_turistico">Ponto turístico</option>
                                        <option value="posto_de_gasolina">Posto de gasolina</option>
                                        <option value="posto_de_saude">Posto de saúde</option>
                                        <option value="praca">Praça</option>
                                        <option value="predio_publico">Prédio público</option>
                                        <option value="prefeitura">Prefeitura</option>
                                        <option value="restaurante">Restaurante</option>
                                      </select>
                                    <span class="descricao_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_cep_estabelecimento">{{ __('CEP') }}</label>
                                    <input type="text" class="form-control" id="editar_cep_estabelecimento" name="editar_cep_estabelecimento" placeholder="Digite o cep do estabelecimento">
                                    <span class="editar_cep_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_estado_estabelecimento">{{ __('Estado') }}</label>
                                    <input type="text" class="form-control" id="editar_estado_estabelecimento" name="editar_estado_estabelecimento" placeholder="Digite o estado do estabelecimento">
                                    <span class="editar_estado_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_cidade_estabelecimento">{{ __('Cidade') }}</label>
                                    <input type="text" class="form-control" id="editar_cidade_estabelecimento" name="editar_cidade_estabelecimento" placeholder="Digite o cidade do estabelecimento">
                                    <span class="editar_cidade_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_bairro_estabelecimento">{{ __('Bairro') }}</label>
                                    <input type="text" class="form-control" id="editar_bairro_estabelecimento" name="editar_bairro_estabelecimento" placeholder="Digite o bairro do estabelecimento">
                                    <span class="editar_bairro_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_rua_estabelecimento">{{ __('Rua') }}</label>
                                    <input type="text" class="form-control" id="editar_rua_estabelecimento" name="editar_rua_estabelecimento" placeholder="Digite o rua do estabelecimento">
                                    <span class="editar_rua_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_numero_estabelecimento">{{ __('Número') }}</label>
                                    <input type="text" class="form-control" id="editar_numero_estabelecimento" name="editar_numero_estabelecimento" placeholder="Digite o número do estabelecimento">
                                    <span class="editar_numero_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="editar_complemento_estabelecimento">{{ __('Complemento') }}</label>
                                    <input type="text" class="form-control" id="editar_complemento_estabelecimento" name="editar_complemento_estabelecimento" placeholder="Digite o complemento do estabelecimento">
                                    <span class="editar_complemento_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="editar_latitude_estabelecimento">{{ __('Latitude') }}</label>
                                    <input type="text" class="form-control" id="editar_latitude_estabelecimento" name="editar_latitude_estabelecimento" placeholder="Digite a latitude do estabelecimento">
                                    <span class="editar_latitude_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="editar_longitude_estabelecimento">{{ __('Longitude') }}</label>
                                    <input type="text" class="form-control" id="editar_longitude_estabelecimento" name="editar_longitude_estabelecimento" placeholder="Digite a longitude do estabelecimento">
                                    <span class="editar_longitude_estabelecimento" style="color: red"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{ __('Cancelar') }}</button>
                <button type="button" class="btn btn-success" id="botaoAtualizar" onclick="atualizarEstabelecimento()">{{ __('Salvar') }}</button>
                </div>
            </div>
            </div>
        </div>
</div>
</div>
<script>
   const DATA = {
        estabelecimentos: <?=json_encode($estabelecimentos)?>,
    };
</script>
<script src="../js/estabelecimentos/estabelecimentos_script.js"></script>
<script src="../js/estabelecimentos/salvar.js"></script>
<script src="../js/estabelecimentos/atualizar.js"></script>
<script src="../js/estabelecimentos/deletar.js"></script>
@endsection
