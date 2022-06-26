/*
  * Funcao responsavel por cadastrar um novo estabelecimento 
  */
function cadastrarEstabelecimento(){
    let nome = $("#nome_estabelecimento").val();
    let descricao = $("#descricao_estabelecimento").val();
    let tipo = $("#tipo_estabelecimento").val();
    let cep = $("#cep_estabelecimento").val();
    let estado = $("#estado_estabelecimento").val();
    let cidade = $("#cidade_estabelecimento").val();
    let bairro = $("#bairro_estabelecimento").val();
    let rua = $("#rua_estabelecimento").val();
    let numero = $("#numero_estabelecimento").val();
    let complemento = $("#complemento_estabelecimento").val();
    let latitude = $("#latitude_estabelecimento").val();
    let longitude = $("#longitude_estabelecimento").val();

    try {
        if(nome == "") throw {erros:{id:"nome", type:"error", msg: "O campo Nome é obrigatório."}}
        if(nome.length < 3) throw {erros:{id:"nome", type:"error", msg: "O campo Nome deve ter pelo menos 4 caracteres."}}
        if(descricao == "") throw {erros:{id:"descricao", type:"error", msg: "O campo Descrição é obrigatório."}}
        if(tipo == "") throw {erros:{id:"tipo", type:"error", msg: "O campo Tipo é obrigatório."}}
        if(cep == "") throw {erros:{id:"cep", type:"error", msg: "O campo CEP é obrigatório."}}
        if(estado == "") throw {erros:{id:"estado", type:"error", msg: "O campo Estado é obrigatório."}}
        if(cidade == "") throw {erros:{id:"cidade", type:"error", msg: "O campo Cidade é obrigatório."}}
        if(bairro == "") throw {erros:{id:"bairro", type:"error", msg: "O campo Bairro é obrigatório."}}
        if(rua == "") throw {erros:{id:"rua", type:"error", msg: "O campo Rua é obrigatório."}}
        if(numero == "") throw {erros:{id:"numero", type:"error", msg: "O campo Número é obrigatório."}}

        let formData = new FormData(document.getElementById("formEstabelecimento"));

        salvarEstabelecimento(formData);
    } catch (error) {
       showAlerta(error);
    }
}
/*
* Funcao responsavel por salvar o novo estabelecimento
*/
function salvarEstabelecimento(formData){
   interacao("start");
   $.ajax({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       type: 'POST',
       url: "/home/estabelecimento/salvar",
       dataType: 'JSON',
       data: formData,
       processData: false,
       contentType: false,
       success: function(resultado) {
        //    adicionarRegistros(resultado.empresas.empresas);
        console.log(resultado);
           interacao("stop");
       }
   });
}