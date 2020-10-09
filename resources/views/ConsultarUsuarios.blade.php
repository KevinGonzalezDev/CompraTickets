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
        <span></span>
        <span></span>
        <span><</span>
        <a href="#" onclick="history.back()">Volver</a>

    </div>
    <br>
    <br>
    <div class="consultas-container">
        <span></span>
        <a class="btton-compradores">Información de compradores</a>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <a class="btton-participantes">Información de participantes</a>
    </div>


    <h2 id="tl-consulta-usuarios"></h2>

    <div class="tablaConsultarUsuarios-container tablaConsultarCompradores" >

        <table>

            <thead>
                <tr>

                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th>Empresa</th>
                    <th>Cantidad</th>
                </tr>
            </thead>


            <tbody>
                @foreach($usuarios as $SelectUser)

                    <tr>

                        <td>{{$SelectUser->email}}</td>
                        <td>{{$SelectUser->name}}</td>
                        <td>{{$SelectUser->apellido}}</td>
                        <td>{{$SelectUser->celular}}</td>
                        <td>{{$SelectUser->empresa}}</td>
                        <td>{{$SelectUser->Cantidad}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>

    <div class="tablaConsultarUsuarios-container tablaConsultarparticipantes">

        <table>

            <thead>
                <tr>
                    <th>fecha</th>
                    <th>type_tickets_id</th>
                    <th>comprador_id</th>
                    <th>id_facturacion</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>genero</th>
                    <th>noidentificacion</th>
                    <th>correo</th>
                    <th>celular</th>
                    <th>pais</th>
                    <th>indicativo</th>
                    <th>ciudad</th>
                    <th>direccion</th>
                </tr>
            </thead>


            <tbody>
                @foreach($comprador_ticket as $compra_ticket)

                    <tr>

                        <td>{{$compra_ticket->fecha}}</td>
                        <th>{{$compra_ticket->type_tickets_id}}</th>
                        <th>{{$compra_ticket->comprador_id}}</th>
                        <th>{{$compra_ticket->idfacturacion}}</th>
                        <th>{{$compra_ticket->nombre}}</th>
                        <th>{{$compra_ticket->apellido}}</th>
                        <th>{{$compra_ticket->genero}}</th>
                        <th>{{$compra_ticket->noidentificacion}}</th>
                        <th>{{$compra_ticket->correo}}</th>
                        <th>{{$compra_ticket->celular}}</th>
                        <th>{{$compra_ticket->pais}}</th>
                        <th>{{$compra_ticket->indicativo}}</th>
                        <th>{{$compra_ticket->ciudad}}</th>
                        <th>{{$compra_ticket->direccion}}</th>

                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
    <script>
    $(document).ready(function(){
      $(".tablaConsultarUsuarios-container").hide();

      $(".btton-compradores").click(function(){
        $("#tl-consulta-usuarios").text("Información de compradores");
        $(".tablaConsultarCompradores").show();
        $(".tablaConsultarparticipantes").hide();
      });
      $(".btton-participantes").click(function(){
        $("#tl-consulta-usuarios").text("Información de participantes");
        $(".tablaConsultarparticipantes").show();
        $(".tablaConsultarCompradores").hide();
      });
    });
    </script>

@endsection
