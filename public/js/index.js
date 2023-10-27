$(' li a.listar').on('click', function(e) {
    e.preventDefault();
    // $('#contenido li ').on('click', function(e) {
    //     e.preventDefault();
    // });
    // $('#sesion_iniciada').fadeOut();

    var aID = $(this).attr('href');

    const el = document.querySelectorAll('.activar_boton');

    for (var i = 0; i < el.length; i++) {
        el[i].classList.remove("active");
    }


    // el.classList.remove('active');
    $(this).addClass('active');

    // console.log(aID);
    $.post(aID, function(data) {
        if (aID != "#") {
            $("#contenido").html(data);
        }
    });
});

function home() {
    $.ajax({
        type: "get",
        url: "src/controlador/controlador_adopcion_apadrinamiento.php",
        data: { accion: 'listar_home' },
        dataType: "json"
    }).done(function(aa) {
        console.log(aa);
        $.each(aa.data, function(index, value) {
            if (value.estado == 'publicado') {
                var URL_imagen;
                if (value.URL_imagen == '') {
                    URL_imagen = 'public/img/logo.png';
                } else {
                    URL_imagen = 'public/img/fundaciones/' + value.URL_imagen;
                }
                $("#mascotas").append(
                    '<div class="profile-card-4 text-center col-lg-6 p-0">' +
                    ' <img src="' + URL_imagen + '" class="img img-responsive" style="height:280px; width:auto;">' +
                    '    <div class="profile-content bg-primary-plantilla">' +
                    '        <div class="profile-description text-black">' +
                    '            <h5>' + value.nombre + '</h5>' +
                    '        </div>' +
                    '        <div class="row">' +
                    '            <div class="col-xs-4">' +
                    '                <div class="profile-overview">' +
                    '                </div>' +
                    '            </div>' +
                    '        </div>' +
                    '    </div>' +
                    '</div>'
                );
            }
        });
    });

    $.ajax({
        type: "get",
        url: "src/controlador/controlador_fundaciones.php",
        data: { accion: 'listar_home' },
        dataType: "json"
    }).done(function(fundacion) {
        console.log(fundacion);
        $.each(fundacion.data, function(index, value) {
            var URL_imagen;
            if (value.URL_imagen == '') {
                URL_imagen = 'public/img/logo.png';
            } else {
                URL_imagen = 'public/img/fundaciones/' + value.URL_imagen;
            }
            $("#fundacion").append(
                '<div class="profile-card-4 text-center col-lg-6 p-0">' +
                ' <img src="' + URL_imagen + '" class="img img-responsive" style="height:280px; width:auto;">' +
                '    <div class="profile-content bg-primary-plantilla">' +
                '        <div class="profile-description text-black">' +
                '            <h5>' + value.nombre + '</h5>' +
                '        </div>' +
                '        <div class="row">' +
                '            <div class="col-xs-4">' +
                '                <div class="profile-overview">' +
                '                <button type="button" class="btn bg-secondary-plantilla vermas text-white" data-bs-toggle="modal" data-bs-target="#detalle_fundacion" data-codigo="' + value.id + '">Ver Más</button>' +
                '                </div>' +
                '            </div>' +
                '        </div>' +
                '    </div>' +
                '</div>'
            );
        });

    });
}