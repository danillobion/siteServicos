
/*
* Variaveis globais
*/
var estabelecimento_id;
var estabelecimento_nome;

/*
* Funcao responsavel por listar os estabelecimentos cadastrados no sistema
*/
document.addEventListener("DOMContentLoaded", function() {
    adicionarRegistros(DATA.estabelecimentos);
  });

  function adicionarRegistros(dados){
    document.getElementById("tableEstabelecimentos").innerHTML = ""; // limpar 
    var table = document.getElementById("tableEstabelecimentos");
    dados.map(e=>{
        var row = table.insertRow(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = e.nome;
        cell2.innerHTML = tipoDropdown(e);
    });
  }

  function tipoDropdown(dados){
        return `
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" estabelecimento_id="${dados.id}" estabelecimento_nome="${dados.nome}" onclick="atualizarVariaveisGlobais(this)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ações
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="estabelecimento/${dados.id}/paradas">Paradas</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" data-toggle="modal" data-target="#modalAtualizarEstabelecimento" onclick="editarEstabelecimento()">Editar</a>
        <a class="dropdown-item" href="#" style="color:red" onclick="deletarEstabelecimento()">Deletar</a>
        </div>
        </div>`;
}

function atualizarVariaveisGlobais(dados){
    estabelecimento_id = dados.getAttribute("estabelecimento_id");
    estabelecimento_nome = dados.getAttribute("estabelecimento_nome");
}

 /*
 * Funcao responsavel por limpar os campos
 */
function limparCampos(){
    // $("#nome_empresa").removeClass("is-invalid").val("");
    // $(".nome_empresa").text("");
}
 /*
 * Funcao responsavel por avisar quando o campo tiver errado
 */
function showAlerta(data){
    console.log(data);
    // $("#nome_empresa").addClass("is-invalid");
    // $(".nome_empresa").text(data.erros.msg);
}
function interacao(acao){
    if(acao == "start"){
        $("#botaoSalvar").prop("disabled", true);
        $("#botaoSalvar").addClass("disabled");
        $("#botaoAtualizar").prop("disabled", true);
        $("#botaoAtualizar").addClass("disabled");
    }else if(acao == "stop"){
        $("#botaoSalvar").prop("disabled",false);
        $("#botaoSalvar").removeClass("disabled");
        $("#botaoAtualizar").prop("disabled",false);
        $("#botaoAtualizar").removeClass("disabled");
    }
}