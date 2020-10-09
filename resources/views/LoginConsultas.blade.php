

    @extends('layout.general')

    @section('content')
    <style>
    body{
        background:none;
    }
        
    </style>

    <table width ="100%">
                <tr>
                    <td class = 'Margin '>
                        <table width ='100%'>
                            <tr>
                                <td style = 'text-align:left;vertical-align: middle;'>
                                    <img src ='image/logo.png' />
                                </td><td style = 'text-align:right;vertical-align: middle;'>
                                    <img src ='image/LOGO_GENESYS-01_2.png' height = '100px'/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
    </table>


    <div class="login-container">
    
        <form class="wrap-login" method="POST" action='{{route('ConsultarUsuarios')}}'>
        
            <h2>Iniciar Sesión: Administrador</h2>
            <ul class="campos-login">
            
                <li>
                    <label for="usuario_consultor">Usuario(Email)<span class = 'indicador'>*</span></label>
                    <input require type="email" name="usuario_consultor" name ='correo'>
                </li>
                <li>
                    <label require for="usuario_consultor">Contraseña<span class = 'indicador'>*</span></label>
                    <input type="password" name="usuario_consultor" name ='contraseña'>
                </li>

            </ul>

            <input type="submit" value="CONTINUAR" id="login-consultor-btn" name="enviar">

        </form>
    
    </div>


    @endsection
