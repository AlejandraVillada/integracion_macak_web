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
            <form id="form_registrar" method="POST" enctype="multipart/form-data">
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
                        <textarea name="descripcion" id="descripcion" class="form-control fundacion" cols="30"
                            rows="10"></textarea>
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

<div class="registro">
    <div class="nav">
        <div class="inicio-parent">
            <i class="inicio">Inicio</i>
            <i class="inicio">Adopciones</i>
            <i class="inicio">Apadrinamiento</i>
            <i class="inicio">Donaciones</i>
            <i class="inicio">Sobre nosotros</i>
        </div>
        <div class="registrate">
            <b class="click-here">Registrate</b>
        </div>
        <div class="login">
            <b class="click-here">Login</b>
        </div>
    </div>
    <div class="rectangle-parent">
        <div class="group-child"></div>
        <div class="fondo-4"></div>
        <img class="group-item" alt="" src="./public/line-1.svg" />

        <div class="macak">MACAK</div>
        <div class="donaciones1">Registro</div>
        <div class="banner">
            <div class="banner-child"></div>
            <div class="banner-item"></div>
            <img class="adorable-perro-basenji-marron-icon" alt=""
                src="./public/adorableperrobasenjimarronblancosonriendodandomaximocincoaisladoblanco-2@2x.png" />
        </div>
        <div class="fondo-donaciones"></div>
        <div class="macak1">MACAK</div>
        <div class="group-inner"></div>
        <div class="footer">
            <div class="derechos-reservados">
                <b class="macak-all-rights">© 2023 MACAK. All rights reserved.</b>
                <b class="terms-of-service">Terms of Service Privacy Policy</b>
            </div>
            <div class="redes-sociales">
                <img class="facebook-negative" alt="" src="./public/facebook--negative.svg" />

                <img class="facebook-negative" alt="" src="./public/twitter--negative.svg" />

                <img class="facebook-negative" alt="" src="./public/instagram--negative.svg" />

                <img class="facebook-negative" alt="" src="./public/youtube--negative.svg" />
            </div>
            <div class="frame-wrapper">
                <div class="frame">
                    <div class="regstrate-ahora-para">
                        Regístrate ahora para no perderte Sobre nuestras novedades
                    </div>
                    <div class="suscribete">
                        <div class="input">
                            <div class="type-something-here">Ingrese su Email</div>
                        </div>
                        <div class="button-l">
                            <div class="click-here2">Suscribete</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rectangle-div"></div>
        <div class="group-child1"></div>
        <div class="group-child2"></div>
        <div class="cantidad-a-donar">
            <div class="menu-label">Usuario</div>
        </div>
        <div class="cantidad-a-donar1">
            <div class="menu-label1">Nombres</div>
        </div>
        <div class="cantidad-a-donar2">
            <div class="menu-label1">Registro de Usuarios</div>
        </div>
        <div class="cantidad-a-donar3">
            <div class="menu-label1">Apellidos</div>
        </div>
        <div class="group-parent">
            <div class="ellipse-parent">
                <div class="ellipse-div"></div>
                <div class="i">i</div>
            </div>
            <div class="cantidad-a-donar4">
                <div class="menu-label1">Acepto Tratamiento de Datos</div>
            </div>
        </div>
        <div class="cantidad-a-donar5">
            <div class="menu-label1">Email</div>
        </div>
        <div class="group-child3"></div>
        <div class="group-child4"></div>
        <div class="cantidad-a-donar6">
            <div class="menu-label1">Usuario</div>
        </div>
        <div class="cantidad-a-donar7">
            <div class="menu-label1">Contraseña</div>
        </div>
        <div class="boton-donar">
            <b class="click-here">Registrarme</b>
        </div>
        <div class="selecione-banco">
            <div class="dropdown-box">
                <div class="header">
                    <img class="iconsregularplus" alt="" src="./public/iconsregularplus.svg" />

                    <div class="menu-label8">
                        <div class="menu-label1">Tipo de Usuario</div>
                    </div>
                    <div class="label1">
                        <div class="label11">Label1</div>
                    </div>
                    <div class="label2">
                        <div class="label11">Label2</div>
                    </div>
                    <div class="label2">
                        <div class="label11">Label3</div>
                    </div>
                    <div class="label4">
                        <div class="label11">Label4</div>
                    </div>
                    <div class="label2">
                        <div class="label11">Label5</div>
                    </div>
                    <img class="iconsregularchevron-down-s" alt="" src="./public/iconsregularchevrondowns.svg" />
                </div>
                <div class="items-frame">
                    <div class="items-list">
                        <div class="item-hover">
                            <img class="iconsregularplus" alt="" src="./public/iconsregularplus1.svg" />

                            <div class="label12">
                                <div class="label11">Label1</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label2</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label3</div>
                            </div>
                            <div class="label4">
                                <div class="label11">Label4</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label5</div>
                            </div>
                            <img class="iconsregularchevron-down-s1" alt=""
                                src="./public/iconsregularchevrondowns1.svg" />
                        </div>
                        <div class="item-hover1">
                            <img class="iconsregularplus" alt="" src="./public/iconsregularplus2.svg" />

                            <div class="label1">
                                <div class="label11">Label1</div>
                            </div>
                            <div class="label24">
                                <div class="label11">Label2</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label3</div>
                            </div>
                            <div class="label4">
                                <div class="label11">Label4</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label5</div>
                            </div>
                            <img class="iconsregularchevron-down-s1" alt=""
                                src="./public/iconsregularchevrondowns2.svg" />
                        </div>
                        <div class="item-hover2">
                            <img class="iconsregularplus" alt="" src="./public/iconsregularplus3.svg" />

                            <div class="label1">
                                <div class="label11">Label1</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label2</div>
                            </div>
                            <div class="label24">
                                <div class="label11">Label3</div>
                            </div>
                            <div class="label4">
                                <div class="label11">Label4</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label5</div>
                            </div>
                            <img class="iconsregularchevron-down-s1" alt=""
                                src="./public/iconsregularchevrondowns3.svg" />
                        </div>
                        <div class="item-hover3">
                            <img class="iconsregularplus" alt="" src="./public/iconsregularplus4.svg" />

                            <div class="label1">
                                <div class="label11">Label1</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label2</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label3</div>
                            </div>
                            <div class="label48">
                                <div class="label11">Label4</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label5</div>
                            </div>
                            <img class="iconsregularchevron-down-s1" alt=""
                                src="./public/iconsregularchevrondowns4.svg" />
                        </div>
                        <div class="item-hover4">
                            <img class="iconsregularplus" alt="" src="./public/iconsregularplus5.svg" />

                            <div class="label1">
                                <div class="label11">Label1</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label2</div>
                            </div>
                            <div class="label2">
                                <div class="label11">Label3</div>
                            </div>
                            <div class="label4">
                                <div class="label11">Label4</div>
                            </div>
                            <div class="label24">
                                <div class="label11">Label5</div>
                            </div>
                            <img class="iconsregularchevron-down-s1" alt=""
                                src="./public/iconsregularchevrondowns5.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="public/js/users.js"></script>
<script>
$(document).ready(register);
</script>