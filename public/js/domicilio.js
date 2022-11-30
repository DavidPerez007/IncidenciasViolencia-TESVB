

$(function($){

    let $id_estado=$('#id_estado');
    $id_estado.on('change',function () {
        let id_estado = $(this).val();

        $.get('/api/estado/'+id_estado+'/municipio', function (data) {
            console.log(data[0] );

            let html_select='<option value="">Municipio / Ri menzum</option>';
            for(let i=0;i==0;i++) {
                for (let j = 0; j < data[i].length; j++) {

                    html_select += '<option value="' + data[0][j].id_municipio + '">' + data[0][j].municipio + '</option>';
                    console.log(data[i].length);
                }
            }
            $('#id_municipio').html(html_select);

        });

        console.log(id_estado);
    });


    let $id_domicilio=$('#id_domicilio');
    $id_domicilio.on('change',function () {
        let id = $(this).val();

        if (! id){
            let html_contenido = ' ' +
                '\n' +
                ' <div class="input-text">\n' +
                '     <div class="input-div" >\n' +
                '         <label for="">Agregar Domicilio:</label>\n' +
                '     </div>\n' +
                ' </div>' +

                '<div class="input-text"> ' +
                '    <div class="input-div form-floating ">' +
                '        <input type="text" required require name="calle" id="calle" class="form-control" placeholder=""> ' +
                '         <label for="calle">Calle/ Ñiii</label> ' +
                '    </div>' +
                '    <div class="input-div form-floating ">' +
                '        <input type="text" required require name="colonia" id="colonia" class="form-control" placeholder="">  ' +
                '        <label for="colonia">Colonia / Ri xoru</label>' +
                '    </div>' +
                '</div>' +
                ' <div class="input-text">\n' +
                '     <div class="input-div form-floating ">\n' +
                '         <input type="text" required require name="no_interior" id="no_interior" class="form-control" placeholder="">' +
                '        <label for="no_interior">Número Interior / Mberee srrinu</label>' +
                '     </div>\n' +
                '</div>' +
                ' <div class="input-text">\n' +
                '     <div class="input-div form-floating ">\n' +
                '         <input type="text" required require name="no_exterior" id="no_exterior" class="form-control" placeholder="">' +
                '         <label for="no_exterior">Número Exterior / Mberee mböö</label>' +
                '     </div>\n' +
                ' </div>' +
                '\n' +
                '</div>';

            $('#contenido').html(html_contenido);
            $('#estado').find("*").prop('disabled',false).show();
            $('#municipios').find("*").prop('disabled',false).show();
            return;
        }
        //ajax
        $.get('/api/domicilio/'+id+'/domicilio', function (data) {
            let html_contenido = '' +
                '\n' +
                ' <div class="input-text ">\n' +
                '     <div class="input-div" >\n' +
                '         <label for="">Datos del domicilio:</label>\n' +
                '     </div>\n' +
                ' </div> ' +
                '<div class="input-text"> ' +
                '    <div class="input-div form-floating ">' +
                '        <input type="text" name="calle" id="calle" class="form-control" value="' + data[0][0].calle + '"placeholder="' + data[0][0].calle + '">  ' +
                '       <label for="calle">Calle / Ñiii</label> ' +
                '    </div>' +
                '    <div class="input-div form-floating ">' +
                '        <input type="text" name="colonia" id="colonia" class="form-control" value="' + data[0][0].colonia + '"placeholder="' + data[0][0].colonia + '">  ' +
                '        <label for="colonia">Colonia / Ri xoru</label> ' +
                '    </div>' +
                '</div>' +
                ' <div class="input-text">\n' +
                '     <div class="input-div form-floating ">\n' +
                '         <input type="text" name="no_interior" id="no_interior" class="form-control"  value="' + data[0][0].no_interior + '"placeholder="' + data[0][0].no_interior + '">' +
                '         <label for="no_interior">Número Interior / Mberee srrinu</label>' +
                '     </div>\n' +
                '</div>' +
                ' <div class="input-text">\n' +
                '     <div class="input-div form-floating mb-3">\n' +
                '         <input type="text" name="no_exterior" id="no_exterior" class="form-control" value="' + data[0][0].no_exterior + '"placeholder="' + data[0][0].no_exterior + '" >' +
                '         <label for="no_exterior">Número Exterior / Mberee mböö</label>' +
                '     </div>\n' +
                ' </div>' +
                '\n' +
                '<div class="input-text">\n' +
                '    <div class="input-div">\n' +
                '        <label>Codigo postal / Xakajiii</label>\n' +
                '        <input type="text"  name="cod_postal" id="cod_postal" class="form-control" value="' + data[0][0].cod_postal + '"placeholder="' + data[0][0].cod_postal + '" >\n' +                '    </div>\n' +
                 ' </div>'+
                '\n' +
                '<div class="input-text">\n' +
                '     <div class="input-div">\n' +
                '          <label for="id_estado">Estado</label>'+
                '        <select type="text"   name="id_estado" id="id_estado" class="form-select">\n'+
                '        </select>\n' +
                '    </div>\n' +
                '</div>' +
                '\n' +
                '<div class="input-text">\n' +
                '     <div class="input-div">\n' +
                '          <label>Municipio / Ri menzum</label>'+
                '        <select type="text" name="id_municipio" id="id_municipio" class="form-control">\n'+
                '        </select>\n' +
                '    </div>\n' +
                '</div>';
            $('#contenido').html(html_contenido);


            let html_estado_select='<option value="' +  data[0][0].id_estado + '">'+ data[0][0].estado+'</option>';
            for(let i=2;i==2;i++) {
                for (let j = 0; j < data[i].length; j++) {
                    html_estado_select += '<option value="' + data[2][j].id_estado + '">' + data[2][j].estado+ '</option>';
                    console.log(data[i].length);
                }
            }
            $('#id_estado').html(html_estado_select);
            $('#estado').find("*").prop('disabled',true).hide();

            let html_select='<option value="' +  data[0][0].id_municipio + '">'+ data[0][0].municipio+'</option>';
            for(let i=1;i==1;i++) {
                for (let j = 0; j < data[i].length; j++) {
                    html_select += '<option value="' + data[1][j].id_municipio + '">' + data[1][j].municipio + '</option>';
                    console.log(data[i].length);
                }
            }
            $('#id_municipio').html(html_select);
            $('#municipios').find("*").prop('disabled',true).hide();

        });
    });

});
