function removerParada(parada_id){
    let text = "Você deseja remover o estabelecimento?";
  if (confirm(text) == true) {
    text = "You pressed OK!";
    let formData = new FormData();
    formData.append('parada_id', parada_id);
    formData.append('estabelecimento_id', DATA.estabelecimento_id);
    deletarParada(formData);
  }
}

function deletarParada(formData){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: "/home/estabelecimento/paradas/deletar",
        dataType: 'JSON',
        data: formData,
        processData: false,
        contentType: false,
        success: function(resultado) {
            adicionarRegistros(resultado.paradas);
        }
    });
}