document.addEventListener("DOMContentLoaded", function() {
    adicionarRegistros(DATA.linhas);
  });

  function adicionarRegistros(dados){
    document.getElementById("tabelaLinhas").innerHTML = ""; // limpar 
    var table = document.getElementById("tabelaLinhas");
    dados.map(e=>{
        $('#tabelaLinhas').append(`
            <tr class="modal-color">
                        <td style="border: 0px; padding:0px">
                            <a  href="/parada/${e.id}"  style="cursor: pointer; text-decoration: none;">
                                <div class="d-flex justify-content-between" style="margin-bottom: -1rem; margin-top: -1rem;">
                                    <div class="btn-group" style="margin-top:5px; margin-bottom: -20px">
                                        <div class="form-group" style="margin-left: 10px">
                                            <img src="../assets/icon_bus.svg" alt="" style="margin-right: 10px; margin-bottom:10px">
                                            <h6 style="font-size: 12px; color:#ccc">${e.numero}</h6>
                                        </div>
                                        <div class="form-group" style="margin-top:4px;">
                                            <h5 style="color:#fff">${e.nome}</h5>
                                            <h5 style="font-size: 14px; color:#ccc">${e.valor}</h5>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"><img src="../assets/icon_direita.svg" alt="" style="margin-right: 10px; margin-bottom:10px"></div>
                                </div>
                            </a>
                        </td>
                      </tr>
        `);
    });
  }

  function paradas(linha_id){
    let formData = new FormData();
    formData.append('linha_id', linha_id);
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: "/parada",
        dataType: 'JSON',
        data:formData,
        processData: false,
        contentType: false,
    });
  }