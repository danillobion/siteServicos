/*
* Funcao responsavel por listar as paradas vinculadas ao estabelecimento
*/
document.addEventListener("DOMContentLoaded", function() {
    adicionarRegistros(DATA.paradas);
    setParadasSelect(DATA.todasAsParadas);
  });

  /*
  * Funcao responsavel por listar todas as paradas de um determinado estabelecimento na tela
  */
  function adicionarRegistros(dados){
    document.getElementById("tableParadas").innerHTML = ""; // limpar 
    var table = document.getElementById("tableParadas");
    dados.map(e=>{
        var row = table.insertRow(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = e.rua;
        cell2.innerHTML = tipoDropdown(e);
    });
  }

  function tipoDropdown(dados){
    return `
    <div class="dropdown">
      <button class="btn btn-sm btn-light" onclick="removerParada(${dados.id})")>Remover</button>
    </div>`;
}

  /*
  * Funcoa responsavel por listar todas as paradas no select
  */
  function setParadasSelect(dados){
    var selectParadas = document.getElementById('todas-as-parada');
    dados.map(e=>{
      var option = document.createElement("option");
      option.value = e.id;
      option.text = e.rua;
      selectParadas.add(option);
    });
  }