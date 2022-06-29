@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="style-font-1"><?= $linha->nome ?></h2>
            <div class="d-flex justify-content-between">
                <h6 class="style-font-2">Empresa</h6>
                <h6 class="style-font-2">ABC</h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="style-font-2">Número da linha</h6>
                <h6 class="style-font-2"><?= $linha->numero ?></h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="style-font-2">Valor da passagem</h6>
                <h6 class="style-font-2">R$ <?= $linha->valor ?></h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="style-font-2">Tempo de espera</h6>
                <h6 class="style-font-2"><?= $linha->tempo_de_espera ?></h6>
            </div>
            <div class="d-flex justify-content-between" style="background-color: #4f4f4f; border-radius:5px;">
                <button class="btn btn-light" style="width: 100%">Paradas</button>
                <button class="btn" style="width: 100%; color:white">Horarios</button>
            </div>
            <div class="form-group">
                <table class="table table-borderless" id="tabelaLinhas">
                    <tbody >

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
<script>
    const DATA = {
         linha: <?=json_encode($linha)?>,
         paradas: <?=json_encode($paradas)?>,
         horarios: <?=json_encode($horarios)?>,
     };
 </script>
@endsection