
/*
* Funcao responsavel por salvar as paradas
*/
function salvarListaDeParadas(){
    let table = document.getElementById("listaDeParadasSelecionadas");
    let tr = table.querySelectorAll("tbody tr");
    let listaParadasSelecionadas = [];
    for (i = 0; i < tr.length; i++) {
        listaParadasSelecionadas.push(parseInt(tr[i].id.replaceAll("selecionado_","")));
    }
    salvar(parseInt(DATA.linha_id), $('meta[name="csrf-token"]').attr('content'), listaParadasSelecionadas);
}

/*
* Funcao responsavel por cadastrar/atualizar a lista de paradas
*/
function salvar(linha_id, _token, lista){
    interacao("start");
   $.ajax({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       type: 'POST',
       url: "/home/linha/parada/salvar",
       dataType: 'JSON',
       data: {
        linha_id : linha_id ,
        _token : _token, 
        lista : lista, 
       },
       success: function(resultado) {
            adicionarRegistros(resultado.linhaeparadas.linhaeparadas);
            document.getElementById("tableTodasAsParadasSelecionadas").innerHTML = ""; // limpar 
            alert("Paradas salva com sucesso.");
            interacao("stop");
       }
   });
}

/*
* Funcao responsavel 
*/

// /*
//   * Funcao responsavel por cadastrar uma nova linha 
//   */
// function cadastrarLinhaEParadas(){
//     var parada_selecionada_id = $("#select_parada").val();
//     try {
//         if(parada_selecionada_id == "") throw {erros:{id:"select_parada", type:"error", msg: "O campo Rua é obrigatório."}}

//         var formData = new FormData();
//         formData.append('linha_id', parseInt(DATA.linha_id));
//         formData.append('parada_id', parseInt(parada_selecionada_id));
//         formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
//         salvarLinhaeParada(formData);
//     } catch (error) {
//         showAlerta(error);
//     }
// }
// /*
// * Funcao responsavel por salvar a nova linha
// */
// function salvarLinhaeParada(formData){
//    interacao("start");
//    $.ajax({
//        headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        },
//        type: 'POST',
//        url: "/home/linha/parada/salvar",
//        dataType: 'JSON',
//        data: formData,
//        processData: false,
//        contentType: false,
//        success: function(resultado) {
//            adicionarRegistros(resultado.linhaeparadas.linhaeparadas);
//            interacao("stop");
//        }
//    });
// }