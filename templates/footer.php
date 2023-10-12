
<footer class="footer">
    <div class="derechos-reservados">
        <p class="text-wrapper">© 2023 MACAK. All rights reserved.</p>
        <div class="terms-of-service">
            Terms of Service&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy
        </div>
    </div>
    <div class="overlap-group">
        <div class="redes-sociales">
            <img class="img" src="https://c.animaapp.com/SKPIC6Mj/img/facebook---negative.svg" />
            <img class="img" src="https://c.animaapp.com/SKPIC6Mj/img/twitter---negative.svg" />
            <img class="img" src="https://c.animaapp.com/SKPIC6Mj/img/instagram---negative.svg" />
            <img class="youtube-negative" src="https://c.animaapp.com/SKPIC6Mj/img/youtube---negative.svg" />
        </div>
        <div class="frame">
            <div class="frame-2">
                <p class="p">Regístrate ahora para no perderte Sobre nuestras novedades</p>
                <div class="suscribete">
                    <input class="input" placeholder="Ingrese su&amp;nbsp;&amp;nbsp;Email" type="email" />
                    <div class="button-l">
                        <div class="click-here">Suscribete</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="public/js/index.js"></script>
<script>
$.ajax({
    type: "get",
    url: "src/controlador/controlador_adopcion_apadrinamiento.php",
    data: {
        accion: 'listar_home'
    },
    dataType: "json"
}).done(function(aa) {
    console.log(aa);
    $.each(aa.data, function(index, value) {
        var URL_imagen;
        if (value.URL_imagen == '') {
            URL_imagen = 'public/img/logo.png';
        } else {
            URL_imagen = 'public/img/animales/' + value.URL_imagen;
        }
        $("#mascotas").append(
            '<div class="profile-card-4 text-center col-lg-3 p-0">' +
            ' <img src="' + URL_imagen +
            '" class="img img-responsive" style="height:280px; width:auto;">' +
            '    <div class="profile-content bg-primary-plantilla">' +
            '        <div class="profile-description text-black">' +
            '            <h5>' + value.nombre + '</h5>' +
            '            <span>' + value.descripcion + '</span>' +
            '        </div>' +
            '        <div class="row">' +
            '            <div class="col-xs-4">' +
            '                <div class="profile-overview">' +
            // '                <button type="button" class="btn bg-secondary-plantilla vermas text-white" data-bs-toggle="modal" data-bs-target="#detalle_fundacion" data-codigo="' + value.id + '">Ver Más</button>' +
            '                </div>' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '</div>'
        );

        // $("#mascotas").append("<div class='col-lg-12 col-sm-10 col-md-10 d-flex justify-content-center'><div class='col-lg-3 col-sm-10 col-md-10 m-2'><div class='row'><img src='" + value.URL_imagen + "' style='width: 200px;' alt='' srcset=''></div><div class='row'><h4>" + value.nombre + "</h4></div><div class='row'>" + value.descripcion + "</div></div></div>")
    });
});
</script>
</body>

</html>