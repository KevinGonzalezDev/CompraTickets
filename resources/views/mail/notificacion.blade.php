<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <div style = 'height:700px;background-image:url({{$Url}}image/001.png);padding-left:20%;padding-right: 20%;'>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table width ='100%'>
            <tr>
                <td style = 'text-align:center;'>
                    <img src ='{{$Url}}image/logo.png' height = '100px'/>
                </td>
				<td style = 'text-align:center;'>
                    <img src ='{{$Url}}image/LOGO_GENESYS-01_2.png' height = '100px'/>
                </td>
            </tr>
            <tr><td><br><br></td></tr>
            <tr>
                <td colspan = '2' style = 'text-align:center;color:#6420E1;font-weight: bold;font-size:30px;'>
                    HOLA ¡{{ $persona }}!
                </td>
            </tr>
            <tr><td><br><br></td></tr>
			<tr>
                <td colspan = '2' style = 'text-align:center;color:#333333;font-weight: bold;font-size:28px;'>
                    Te confirmamos que ya eres parte de Nuestro evento No.17 de Customer Experience Summit 2020. 
                </td>
            </tr>
            <tr><td><br><br></td></tr>
            <tr>
                <td colspan = '2' style = 'text-align:center;color:#333333;font-weight: bold;font-size:28px;'>
                    <a href = '{{$UrlRegistro}}' style = 'border-bottom:1px solid black;'>Continúa con tu proceso de registro.</a>
                </td>
            </tr>
            <tr><td><br><br></td></tr>
            <tr>
                <td colspan = '2' style = 'text-align:center;color:#333333;font-weight: bold;font-size:28px;'>
                    Ingresa al enlace y llena los datos de de tu reserva.
                </td>
            </tr>
        </table>
    </div>
</body>
</html>