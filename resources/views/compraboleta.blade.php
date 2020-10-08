@extends('layout.general')

@section('content')
        <style>
            body{
                background-image:none;
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
    
	<br>
    <div class = 'SeleccionTipoComprador ' >
        <div >
            <table width ='100%' class = 'Margin'>
                <tr>
                    <td colspan = '3' style = 'text-align:center;'>
                        <p class = 'ValorBoleta TitulosS' style = 'color:white;'>Regístrate</p>
                        <p class = 'ValorBoleta TitulosS' style = 'color:white;font-size:18px;'>Selecciona una de las dos opciones y continúa tu proceso de compra.</p>
                    </td>
                </tr>
                <tr>
                    <td style = 'text-align: center;'>
                        <div class = ' ContentTipoComprador' style = 'margin:0px auto;background-color:#FC4758;background-image:url("image/emp.png");    background-repeat: round;'>
                            <p class = 'Link TitulosS'style = 'margin:0px auto;'><a href ="{{route('RegistroE')}}">EMPRESA</a></p>
                        </div>
                    </td>
                    <td style = 'width:30px;'></td>
                    <td style = 'text-align: center;'>
                        <div class = 'ContentTipoComprador' style = 'margin:0px auto;background-color:#6420E1;background-image:url("image/pn.png");    background-repeat: round;'>
                            <p class = 'Link TitulosS'style = 'margin:0px auto;'><a href ="{{route('RegistroP')}}">PERSONA NATURAL</a></p>
                        </div>
                    </td>
                </tr>
				<tr><td><br><br></td></tr>
				<tr>
                    <td colspan = '3' style = 'text-align:center;'>
                        <p class = 'ValorBoleta TitulosS' style = 'color:white;'>¿Ya estás registrado?</p>
                        <div class = 'ContentTipoComprador' style = 'margin:0px auto;background-color:#6420E1;background-image:url("image/pn.png");    background-repeat: round;'>
                            <p class = 'Link TitulosS'style = 'margin:0px auto;'><a href ="{{route('IngresoClientes')}}">INGRESA AQUÍ</a></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <script>
    $(document).ready(function () {
        
        var slideIndex = 0;

    })
</script>
@endsection
