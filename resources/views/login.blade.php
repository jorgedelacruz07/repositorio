@extends ('layouts.layout')

@section('particulas')
    <div id="particles-js"> </div>
@stop

@section ('content')


    <div class="envoltura">

        <div class="cabecera" >
            <img src="rsc/UNMSM.png">
        </div>
        <div class="cuerpo">
            <form id="form-login" class="login" action="{{ url('perfil') }}" method="post" autocomplete="off">
                {{ csrf_field() }}
                <div class="form-login">
                    <label for="id_usuario">USUARIO</label><br>
                    <input type="text" id="id_usuario" name="id_usuario" placeholder="Ingresar usuario" autofocus="" required="">
                </div>
                <div class="form-login">
                    <label for="password">CONTRASEÑA</label><br>
                    <input type="password" id="password" name="password" placeholder="Ingresar password" required="">
                </div>
                <div class="form-login">
                    <input type="submit" id="submit" name="submit" value="Enviar" class="boton">
                </div>
            </form>
        </div>
        <div class="pie">
            <p>SISTEMA DE LOGIN Y REGISTRO</p>
        </div>
    </div>

@stop