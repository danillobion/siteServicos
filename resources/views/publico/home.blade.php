@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="style-font-1">Linhas</h2>
            <h6 class="style-font-2">O site Vai descer, motô! foi criado para ser o seu guia e te deixar informado sobre os horários dos ônibus e dos pontos de parada das linhas de transporte coletivo que circulam em Garanhuns/PE. 📌 Não pertencemos a nenhuma empresa de transporte ou órgão público, mas fique tranquilo que estamos aqui pra você não se aperrear com os horários dos ônibus. 😉</h6>
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
         linhas: <?=json_encode($linhas)?>,
     };
 </script>
 <script src="/js/publico/publico_home.js"></script>
@endsection