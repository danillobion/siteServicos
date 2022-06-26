/*
* Funcao responsavel por salvar um novo registro
*/
function salvarParada(){
    let idParadaSelecionada = $("#todas-as-parada").val();
    if(idParadaSelecionada != ""){
        let formData = new FormData();
        formData.append('parada_id', idParadaSelecionada);
        formData.append('estabelecimento_id', DATA.estabelecimento_id);
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: "/home/estabelecimento/paradas/salvar",
        dataType: 'JSON',
        data: formData,
        processData: false,
        contentType: false,
        success: function(resultado) {
            adicionarRegistros(resultado.paradas);
        }
    });
    }else{
        console.log("Erro ao tentar vincular uma parada ao estabelecimento.");
    }
}