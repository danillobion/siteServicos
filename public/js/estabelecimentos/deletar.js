function deletarEstabelecimento() {
    let formData = new FormData();
    formData.append('estabelecimento_id', estabelecimento_id);
    formData.append('csrf-token', $('meta[name="csrf-token"]').attr('content'));

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: "/home/estabelecimento/deletar",
        dataType: 'JSON',
        data: formData,
        processData: false,
        contentType: false,
        success: function(resultado) {
            adicionarRegistros(resultado.estabelecimentos);
        }
    });
}