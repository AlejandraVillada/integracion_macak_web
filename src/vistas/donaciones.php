<style>
h2 {
    color: var(--primary-colordark-blue);
    font-family: 'Permanent Marker', cursive;
}

h5 {
    color: white;
    font-family: 'Fredoka One', cursive;
}

h4 {
    color: #735041;
    font-family: 'Fredoka One', cursive;
}
</style>

<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

<style>
.carta_general {

    background-color: white;
    padding: 10px;
    height: 700px;
    color: white;
    border-radius: 15px;
    padding: 80px;

}
</style>
<div class="donaciones">
    <div class="overlap-wrapper">
        <div class="overlap">
            <div class="group">
                <div class="div">
                    <div class="overlap-2">
                        <div class="rectangle"></div>
                        <div class="banner">
                            <div class="overlap-group-2">
                                <div class="rectangle-2"></div>
                                <div class="rectangle-3"></div>
                                <img class="horizontal-shot"
                                    src="public/images/horizontal-shot-adult-girl-jeans-overalls-kissing-cute-puppy-whi.png" />
                            </div>
                        </div>
                        <div class="formulario-de">
                            <div class="overlap-3">
                                <div class="container-fluid  justify-content-center d-flex mt-5">
                                    <div class="card carta_general  " style="background-color: white">
                                        <div class="row m-1 justify-content-center d-flex"
                                            style="color: black !important;">
                                            <form id="datos" method="get">
                                                <div class="row text-center">
                                                    <h2>MACAK DONACIONES</h2>
                                                    <br>
                                                    <h6>Construyendo Familias</h6>
                                                </div>
                                                <div class="row">
                                                    <label for="">Numero de cedula</label>
                                                    <input class="form-control m-2" type="text" name="cedula"
                                                        id="cedula"
                                                        placeholder="Ingrese el numero su cedula de cuidadania"
                                                        required>
                                                </div>
                                                <div class="row">
                                                    <label for="">Correo electronico</label>
                                                    <input class="form-control m-2" type="correo" name="correo"
                                                        id="correo" placeholder="Ingrese su correo electronico"
                                                        required>
                                                </div>
                                                <div class="row">
                                                    <label for="">Numero de cuenta</label>
                                                    <input class="form-control m-2" type="text" name="cuenta_origen"
                                                        id="cuenta_origen"
                                                        placeholder="Ingrese el numero de cuenta origen" required>
                                                </div>
                                                <div class="row">
                                                    <label for="">Fundacion</label>
                                                    <select name="id_fundacion" id="id_fundacion"
                                                        class="form-control m-2">
                                                        <option value="default">Seleccione una fundacion</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <label for="">Valor a donar</label>
                                                    <input class="form-control m-2" type="number" name="monto"
                                                        id="monto" placeholder="Valor a donar" required>
                                                </div>
                                                <input type="hidden" name="accion" value="donar">
                                                <input type="hidden" name="id_usuario" value="1">
                                                <input type="hidden" name="estado_transaccion" value="1">
                                                <div class="row justify-content-center mt-3">
                                                    <button type="button" class="btn donar"
                                                        style="color: white !important; background-color:#002a48">Enviar
                                                        Donacion</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
        $.ajax({
            type: "get",
            url: "src/controlador/controlador_fundaciones.php",
            data: {
                accion: 'listar'
            },
            dataType: "json"
        }).done(function(fundacion) {
            $.each(fundacion.data, function(index, value) {
                $("#id_fundacion").append("<option value='" + value.id + "'>" + value.nombre +
                    "</option>")
            });

        });

        $(".donar").on("click", function() {
            var datos = $("#datos").serialize();
            console.log(datos);
            $.ajax({
                type: "get",
                url: "src/controlador/controlador_donaciones.php",
                data: datos,
                dataType: "json"
            }).done(function(donacion) {
                if (donacion.respuesta === "error") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Transaccion erronea, por favor revise bien los datos diligenciados',
                    })
                } else {
                    Swal.fire(
                        'La donacion fue enviada',
                        'Muchas gracias por ayudarnos a seguir creciendo',
                        'success'
                    )
                    $("#cedula").val('');
                    $("#correo").val('');
                    $("#cuenta_origen").val('');
                    $("#id_fundacion").val('default');
                    $("#monto").val('');
                }

            });
        });
        </script>