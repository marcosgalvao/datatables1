//function datatableClientes() {
$(document).ready(function () {



    $('#clientes').DataTable({
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
            { data: 'nome' },
            { data: 'celular' },
            { data: 'email' },
            { data: 'id' },
        ],
        'columnDefs': [
            {
                'targets': 4,
                'render': function (data, type, row, meta) {
                    var retorno = '<div class="form-inline"><a class="btn btn-link" href="#" onclick="editarCliente(' + row.id + ')">Editar</a><a class="btn btn-link" href="#" onclick="editarCliente(' + row.id + ')">Excluir</a></div>';
                    return retorno;
                }
            }
        ]

    },


    );

});

function editarCliente(id) {
    alert("editando: " + id);
}

$(document).ready(function () {



    $('#veiculos').DataTable({
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