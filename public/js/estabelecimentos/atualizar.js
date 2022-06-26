function editarEstabelecimento() {
    let formData = new FormData();
    formData.append('estabelecimento_id', estabelecimento_id);
    formData.append('csrf-token', $('meta[name="csrf-token"]').attr('content'));

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: "/home/estabelecimento/editar",
        dataType: 'JSON',
        data: formData,
        processData: false,
        contentType: false,
        success: function(resultado) {
            $("#editar_id_estabelecimento").val(resultado.id);
            $("#editar_nome_estabelecimento").val(resultado.nome);
            $("#editar_descricao_estabelecimento").val(resultado.descricao);
            $("#editar_tipo_estabelecimento").val(resultado.tipo).change();
            $("#editar_cep_estabelecimento").val(resultado.cep);
            $("#editar_estado_estabelecimento").val(resultado.estado);
            $("#editar_cidade_estabelecimento").val(resultado.cidade);
            $("#editar_bairro_estabelecimento").val(resultado.bairro);
            $("#editar_rua_estabelecimento").val(resultado.rua);
            $("#editar_numero_estabelecimento").val(resultado.numero);
            $("#editar_complemento_estabelecimento").val(resultado.complemento);
            $("#editar_latitude_estabelecimento").val(resultado.latitude);
            $("#editar_longitude_estabelecimento").val(resultado.longitude);
        }
    });
}
/*
* Funcao responsavel por salvar as alteracoes no estabelecimento selecionado
*/
function atualizarEstabelecimento() {
    let formData = new FormData();
    formData.append('csrf-token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('estabelecimento_id', $("#editar_id_estabelecimento").val());
    formData.append('nome_estabelecimento', $("#editar_nome_estabelecimento").val());
    formData.append('descricao_estabelecimento', $("#editar_descricao_estabelecimento").val());
    formData.append('tipo_estabelecimento', $("#editar_tipo_estabelecimento").val());
    formData.append('cep_estabelecimento', $("#editar_cep_estabelecimento").val());
    formData.append('estado_estabelecimento', $("#editar_estado_estabelecimento").val());
    formData.append('cidade_estabelecimento', $("#editar_cidade_estabelecimento").val());
    formData.append('bairro_estabelecimento', $("#editar_bairro_estabelecimento").val());
    formData.append('rua_estabelecimento', $("#editar_rua_estabelecimento").val());
    formData.append('numero_estabelecimento', $("#editar_numero_estabelecimento").val());
    formData.append('complemento_estabelecimento', $("#editar_complemento_estabelecimento").val());
    formData.append('latitude_estabelecimento', $("#editar_latitude_estabelecimento").val());
    formData.append('longitude_estabelecimento', $("#editar_longitude_estabelecimento").val());

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: "/home/estabelecimento/atualizar",
        dataType: 'JSON',
        data: formData,
        processData: false,
        contentType: false,
        success: function(resultado) {
           adicionarRegistros(resultado.estabelecimentos);
        }
    });
}