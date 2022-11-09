

$(function($){
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
                '    <div class="input-div form-floating mb-3">' +
                '        <input type="text" name="calle" id="calle" class="form-control" placeholder=""> ' +
                '         <label for="calle">Calle</label> ' +
                '    </div>' +
                '    <div class="input-div form-floating mb-3">' +
                '        <input type="text" name="colonia" id="colonia" class="form-control" placeholder="">  ' +
                '        <label for="colonia">Colonia</label>' +
                '    </div>' +
                '</div>' +
                ' <div class="input-text">\n' +
                '     <div class="input-div form-floating mb-3">\n' +
                '         <input type="text" name="no_interior" id="no_interior" class="form-control" placeholder="">' +
                '        <label for="no_interior">Número Interior</label>' +
                '     </div>\n' +
                '     <div class="input-div form-floating mb-3">\n' +
                '         <input type="text" name="no_exterior" id="no_exterior" class="form-control" placeholder="">' +
                '         <label for="no_exterior">Número Exterior</label>' +
                '     </div>\n' +
                ' </div>' +
                '\n' +
                '</div>';

            $('#contenido').html(html_contenido);
            $('#municipios').find("*").prop('disabled',false).show();
            return;
        }
        //ajax
        $.get('/api/domicilio/'+id+'/domicilio', function (data) {
            console.log(data[0][0]);
            let html_contenido = '' +
                '\n' +
                ' <div class="input-text ">\n' +
                '     <div class="input-div" >\n' +
                '         <label for="">Datos del domicilio:</label>\n' +
                '     </div>\n' +
                ' </div> ' +
                '<div class="input-text"> ' +
                '    <div class="input-div form-floating mb-3">' +
                '        <input type="text" name="calle" id="calle" class="form-control" value="' + data[0][0].calle + '"placeholder="' + data[0][0].calle + '">  ' +
                '       <label for="calle">Calle</label> ' +
                '    </div>' +
                '    <div class="input-div form-floating mb-3">' +
                '        <input type="text" name="colonia" id="colonia" class="form-control" value="' + data[0][0].colonia + '"placeholder="' + data[0][0].colonia + '">  ' +
                '        <label for="colonia">Colonia</label> ' +
                '    </div>' +
                '</div>' +
                ' <div class="input-text">\n' +
                '     <div class="input-div form-floating mb-3">\n' +
                '         <input type="text" name="no_interior" id="no_interior" class="form-control"  value="' + data[0][0].no_interior + '"placeholder="' + data[0][0].no_interior + '">' +
                '         <label for="no_interior">Número Interior</label>' +
                '     </div>\n' +
                '     <div class="input-div form-floating mb-3">\n' +
                '         <input type="text" name="no_exterior" id="no_exterior" class="form-control" value="' + data[0][0].no_exterior + '"placeholder="' + data[0][0].no_exterior + '" >' +
                '         <label for="no_exterior">Número Exterior</label>' +
                '     </div>\n' +
                ' </div>' +
                '\n' +
                '<div class="input-text">\n' +
                '    <div class="input-div">\n' +
                '        <label>Codigo postal</label>\n' +
                '        <input type="text"  name="cod_postal" id="cod_postal" class="form-control" value="' + data[0][0].cod_postal + '"placeholder="' + data[0][0].cod_postal + '" >\n' +                '    </div>\n' +
                '    <div class="input-div">\n' +
                '          <label>Municipio</label>'+
                '        <select type="text" name="id_municipio" id="id_municipio" class="form-control">\n'+
                '        </select>\n' +
                '    </div>\n' +
                '</div>';
            $('#contenido').html(html_contenido);

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
    })

});
