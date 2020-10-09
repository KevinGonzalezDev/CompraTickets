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

    <div class="regresar-container">
        <span><</span>
        <a href="#" onclick="history.back()">Volver</a>
    </div>
    

    <h2 id="tl-consulta-usuarios">Usuarios de la Base de Datos</h2>

    <div class="tablaConsultarUsuarios-container">

        <table>
        
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Empresa</th>
                </tr>
            </thead>

            
            <tbody>
                @foreach($usuarios as $SelectUser)

                    <tr>
                        <td>{{$SelectUser->id}}</td>
                        <td>{{$SelectUser->email}}</td>
                        <td>{{$SelectUser->name}}</td>
                        <td>{{$SelectUser->apellido}}</td>
                        <td>{{$SelectUser->celular}}</td>
                        <td>{{$SelectUser->empresa}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
 
    </div>


@endsection