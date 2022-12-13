
    $(document).ready(function () {
    $('#tablaCatalogos').DataTable({

        "language":{
            "info":"_TOTAL_ Registros",
            "search":"Buscar",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
            },
            "lengthMenu":'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="-1">Todos</option>'+
                '</select> registros',
            "loadingRecords":"Cargando...",
            "processing":"Procesando...",
            "emptyTable":"No hay datos.",
            "zeroRecords":"No hay coincidencias.",
            "infoEmpty":"",
            "infoFiltered":"",

        }
    });
});


    $(document).ready(function () {
    $('#tablaCatalogos1').DataTable({

        columnDefs: [
            {targets: [0,1,2,4],
                orderable: false }
        ],
        order: [[3, 'desc']],

        "language":{
            "info":"_TOTAL_ Registros",
            "search":"Buscar",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
            },
            "lengthMenu":'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="-1">Todos</option>'+
                '</select> registros',
            "loadingRecords":"Cargando...",
            "processing":"Procesando...",
            "emptyTable":"No hay datos.",
            "zeroRecords":"No hay coincidencias.",
            "infoEmpty":"",
            "infoFiltered":"",

        },
    });
});


    $(document).ready(function () {
    $('#registroVictimas').DataTable({

        "sort": true,
        "order" : [[0,"asc"]],
        "columnDefs": [ {
            "targets": [1,2,3,4,5,6,7,8,9,10,11,12],
            "orderable": false
        } ],
        "language":{
            "info":"_TOTAL_ Registros",
            "search":"Buscar",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
            },
            "lengthMenu":'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="-1">Todos</option>'+
                '</select> registros',
            "loadingRecords":"Cargando...",
            "processing":"Procesando...",
            "emptyTable":"No hay datos.",
            "zeroRecords":"No hay coincidencias.",
            "infoEmpty":"",
            "infoFiltered":"",

        },
    });
});
