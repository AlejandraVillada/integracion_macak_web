<style>
    .carta_general {
        background-repeat: no-repeat;
        background-color: rgb(255, 255, 255, 0.2);
        /* margin: 20px; */
        color: white;
        padding-left: 80px;
        padding-right: 80px;
        border-radius: 15px;
        padding-top: 15px;
        padding-bottom: 15px;
        display: flex;
        justify-content: center;

    }

    input {
        box-shadow: 6px 6px 30px #735041;
        /* background-color: ; */
    }
</style>
<div class="container-fluid  justify-content-center d-flex mt-5">
    <div class="card carta_general  " style="background-color: rgba(205, 168, 134,0.8)">
        <div class=" justify-content-center d-flex">

            <!-- <img class="mt-5" src="public/img/logo.png" alt="" width="400"> -->
        </div>
        <div class="row m-1 justify-content-center d-flex" style="color: black !important;">
            <form id="form_registrar" method="POST" enctype="multipart/form-data" >
                <div class="row text-center">
                    <h2>MACAK</h2>
                    <br>
                    <h6>Registro de Usuarios </h6>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <input required type="radio" name="usertype" id="registrar_fundacion" value="3">
                        <label for="">Fundaciones </label>
                    </div>
                    <div class="col" required>
                        <input type="radio" name="usertype" id="registrar_cliente">
                        <label for="">Invitados </label>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Nombre Completo</label>
                        <input type="text" required class="form-control m-2" name="name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Dirección</label>
                        <input type="text" required class="form-control m-2" name="direccion">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Usuario</label>
                        <input type="text" required class="form-control m-2" name="user">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="">Contraseña</label>
                        <input type="text" required class="form-control m-2" name="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <label for="">email</label>
                        <input type="text" required class="form-control m-2" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <label for="" class="lblinfo_fun">nit</label>
                        <input type="text" required class="form-control m-2 fundacion" name="nit">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="lblinfo_fun"> Logo</label>
                        <input type="file" required class="form-control m-2 fundacion" name="logo[]">
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="" class="lblinfo_fun"> Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control fundacion" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <input type="hidden" name="action" value="new_user">
                    <input type="submit" value="Registrarse" class="btn  bg-secondary-plantilla text-white text-bold">

                </div>
                <div class="d-flex justify-content-center row text-center   ">
                    <div class="row">
                        <span>
                            <a href="" style="color: white !important;">Cerrar Sesión</a>
                        </span>
                    </div>
                    <br>

                </div>
            </form>
        </div>
    </div>
</div>

<script src="public/js/users.js"></script>
<script>
    $(document).ready(register);
</script>