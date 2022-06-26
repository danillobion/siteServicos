@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h6 style="margin-top: 10px">{{ __('Paradas vinculadas ao estabelecimentos cadastrados no sistema') }}</h6>
                    <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalLong">{{ __('Selecionar parada') }}</button>
                </div>
                <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-hover  mb-0">
                        <thead>
                          <tr>
                            <th scope="col" style="width:100%">Nome da rua</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody  id="tableParadas" style="height: 100px;  overflow-y: auto; overflow-x: hidden; ">
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
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Selecionar parada') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form id="formParada">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="todas-as-parada">{{ __('Selecione a parada *') }}</label>
                                    <select class="form-control" id="todas-as-parada" name="todas-as-parada">
                                        
                                      </select>
                                    <span class="parada" style="color: red"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{ __('Cancelar') }}</button>
                <button type="button" class="btn btn-success" id="botaoSalvar" onclick="salvarParada()">{{ __('Selecionar') }}</button>
                </div>
            </div>
            </div>
        </div>

</div>
</div>
<script>
   const DATA = {
        estabelecimento_id: <?=$estabelecimento_id?>,
        paradas: <?=json_encode($paradas)?>,
        todasAsParadas: <?=json_encode($todasAsParadas)?>,
    };
</script>
<script src="../../../js/estabelecimentos_e_paradas/estabelecimentos_e_paradas_script.js"></script>
<script src="../../../js/estabelecimentos_e_paradas/salvar.js"></script>
<script src="../../../js/estabelecimentos_e_paradas/deletar.js"></script>
@endsection
