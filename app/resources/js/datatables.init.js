function datatableClientes() {
    //$(document).ready(function () {
    //alert("carreguei clientes no js");


   
    $('.datatable').DataTable({
        responsive: true,
        language: {
            "sEmptyTable": "Não foi encontrado nenhum registo",
            "sLoadingRecords": "A carregar...",
            "sProcessing": "A processar...",
            "sLengthMenu": "Mostrar _MENU_ registos",
            "sZeroRecords": "Não foram encontrados resultados",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
            "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
            "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
            "sInfoPostFix": "",
            "sSearch": "Procurar:",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sPrevious": "Anterior",
                "sNext": "Seguinte",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },

    },


    );

    //});

}

//  abrir as patabelas
function abrirTabelas(tabela) {
    alert(tabela);
}

//Lista de clientes
function listarClientes() {

    $("#content-loja").load("../tabelas/clientes.html", function () {
        //datatableClientes();

        $("#clientes").DataTable({
            'processing': true,
            'serverSide': true,
            //	'ajax': '../../models/processing.php',
            'serverMethod': 'post',
            'ajax': {
                'url': '../../controllers/DataTablesController.php',
                "type": 'POST',
                "data": { action: 'clientes' },

                // 'data':{acao: 'clientes_table'},
            },
            'columns': [
                { data: 'id' },
                { data: 'updated_at' },
                { data: 'nome' },
                { data: 'celular' },
                { data: 'email' },
                { data: 'id' },
            ],
            'columnDefs': [
                {
                    "targets": [0, 1],
                    "visible": false,
                    "searchable": false
                },
                {
                    'targets': 5,
                    'render': function (data, type, row, meta) {
                        var retorno = '<div class="form-inline"><a class="btn btn-link" href="#" onclick="editarCliente(' + row.id + ')"><i class="fas fa-car-side"></i></a><a class="btn btn-link" href="#" onclick="editarCliente(' + row.id + ')"><i class="fas fa-edit"></i></a><a class="btn btn-link" href="#" onclick="editarCliente(' + row.id + ')"><i class="fas fa-trash-alt"></i></a></div>';
                        return retorno;
                    }
                }
            ]
        });

    });

    /* var table = $('#clientes').DataTable({
         ajax: "data.json"
     });*/

    /*  var table = $("#clientes");
      table.ajax.reload();*/






    /* $("#form-ordem-servico-loja").hide();
 
     var btn_clientes = $("#btn-clientes");
     // refreshClientes();
     alert("olá")*/

    /* var table = $('#clientes').DataTable({
         ajax: "data.json"
     });
 
     table.ajax.reload();*/




    //  $("#clientes-fixo").toggle();


    //  $("#content-loja").load("../../views/datatables/clientes.html", () => {


    /*   $('.datatable').DataTable({
           responsive: true,
           language: {
               "sEmptyTable": "Não foi encontrado nenhum registo",
               "sLoadingRecords": "A carregar...",
               "sProcessing": "A processar...",
               "sLengthMenu": "Mostrar _MENU_ registos",
               "sZeroRecords": "Não foram encontrados resultados",
               "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
               "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
               "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
               "sInfoPostFix": "",
               "sSearch": "Procurar:",
               "sUrl": "",
               "oPaginate": {
                   "sFirst": "Primeiro",
                   "sPrevious": "Anterior",
                   "sNext": "Seguinte",
                   "sLast": "Último"
               },
               "oAria": {
                   "sSortAscending": ": Ordenar colunas de forma ascendente",
                   "sSortDescending": ": Ordenar colunas de forma descendente"
               }
           },

           processing: true,
           serverSide: true,
           ajax: '../../models/processing.php'

       });
   }).show();*/


    //  btn_clientes.prop('disabled', true);
    //  $("#content-loja").load("../../views/datatables/clientes.html").show();
    /*  $.ajax({
          method: "POST",
          url: "../../controllers/clienteController.php",
          data: { action: "lista" }
      }).done(function (res) {
          alert("17 - listar clientes: " + res)
          $("#content-loja").load("../../views/loja/clientes.php").show();
         
          
          let js = JSON.parse(res);
          
          btn_clientes.prop('disabled', false);
          
      }).fail(function (jqXHR, textStatus) {
          alert("Request failed: " + textStatus);
      });*/
}


//Editar cliente
function formEditarCliente(id) {

    let nome = $("#nome" + id).text();
    let celular = $("#celular" + id).text();
    let email = $("#email" + id).text();

    let cpf = $("#cpf" + id).val();

    let data_nasc = $("#data_nascimento" + id).val();

    let cep = $("#cep" + id).val();
    let logradouro = $("#logradouro" + id).val();
    let numero = $("#numero" + id).val();
    let complemento = $("#complemento" + id).val();
    let bairro = $("#bairro" + id).val();
    let cidade = $("#cidade" + id).val();
    let uf = $("#uf" + id).val();
    let anotacoes = $("#anotacao" + id).val();

    $("#content-loja").load("../cliente/editar-cliente.php", function () {

        $("#id-cliente-veiculo").val(id);

        $("#id_cliente").val(id);
        $("#nome").val(nome);
        $("#cel").val(celular);
        $("#email").val(email);

        let cpf1 = cpf.substr(0, 3);
        let cpf2 = cpf.substr(3, 3);
        let cpf3 = cpf.substr(6, 3);
        let cpf4 = cpf.substr(9, 2);
        cpf = cpf1 + "." + cpf2 + "." + cpf3 + "-" + cpf4;

        $("#cpf").val(cpf);

        $("#data-nasc").val(data_nasc);
        $("#cep").val(cep);
        $("#logradouro").val(logradouro);
        $("#numero").val(numero);
        $("#complemento").val(complemento);
        $("#bairro").val(bairro);
        $("#cidade").val(cidade);
        $("#uf").val(uf);
        $("#anotacoes").val(anotacoes);

    });
}

function editarCliente() {
    let id = $("#id_cliente").val();
    let nome = $("#nome").val();
    let celular = $("#cel").val();
    let email = $("#email").val();

    let cpf = $("#cpf").val();
    cpf = cpf.replace("-", "");
    cpf = cpf.replace(".", "");
    cpf = cpf.replace(".", "");

    let data_nasc = $("#data-nasc").val();
    let cep = $("#cep").val();
    let logradouro = $("#logradouro").val();
    let numero = $("#numero").val();
    let complemento = $("#complemento").val();
    let bairro = $("#bairro").val();
    let cidade = $("#cidade").val();
    let uf = $("#uf").val();
    let anotacoes = $("#anotacoes").val();

    /*  alert(id + " -- " + nome + " -- " + celular + " -- " + email + " -- " + cpf + " -- " + data_nasc + " -- " + cep + " -- " + logradouro + " -- " + numero + " -- " + complemento + " -- " + bairro + " -- " + cidade + " -- " + uf + " -- " + anotacoes);*/

    $.ajax({
        method: "POST",
        url: "../../controllers/clienteController.php",
        data: { action: "update-cliente", "id": id, "nome": nome, "celular": celular, "email": email, "cpf": cpf, "data_nasc": data_nasc, "cep": cep, "logradouro": logradouro, "numero": numero, "complemento": complemento, "bairro": bairro, "cidade": cidade, "uf": uf, "anotacoes": anotacoes }
    }).done(function (res) {

        if (res === "sucesso") {
            $("#form-novo-cliente").hide();
            $("#alert-sucesso-cad-cliente").show();
        } else {
            alert(res);
        }

    }).fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);
    });

}

//$(document).ready(function () {

function listarVeiculos() {

    $("#content-loja").load("../tabelas/veiculos.html", function () {

    $('#veiculos').DataTable({
       /* responsive: true,
        language: {
            "sEmptyTable": "Não foi encontrado nenhum registo",
            "sLoadingRecords": "A carregar...",
            "sProcessing": "A processar...",
            "sLengthMenu": "Mostrar _MENU_ registos",
            "sZeroRecords": "Não foram encontrados resultados",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
            "sInfoEmpty": "Mostrando de 0 até 0 de 0 registos",
            "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
            "sInfoPostFix": "",
            "sSearch": "Procurar:",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sPrevious": "Anterior",
                "sNext": "Seguinte",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },*/

        'processing': true,
        'serverSide': true,
        //	'ajax': '../../models/processing.php',
        'serverMethod': 'post',
        'ajax': {
            'url': '../../controllers/DataTablesController.php',
            "type": 'POST',
            "data": { action: 'veiculos' },

            // 'data':{acao: 'clientes_table'},
        },
        'columns': [
            { data: 'id' },
            { data: 'modelo' },
            { data: 'marca' },
            { data: 'placa' },
            { data: 'categoria' },
        ]

    });

});

}

//});