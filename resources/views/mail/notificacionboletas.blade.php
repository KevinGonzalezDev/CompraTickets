<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <div style = 'height:900px;background-image:url({{$Url}}image/001.png);background-size:cover;padding-left:20%;padding-right: 20%;'>
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
                <td colspan = '2'style = 'text-align:center;color:#6420E1;font-weight: bold;font-size:30px;'>
                    HOLA {{ $persona }}
                </td>
            </tr>
            <tr><td><br><br></td></tr>
            <tr>
                <td colspan = '2' style = 'text-align:center;color:#333333;font-weight: bold;font-size:28px;'>
                    <p>Gracias por su compra, usted estará en el </p>
					<img src ='{{$Url}}image/logo.png' height = '100px'/>
					
					<p>Días antes del evento, enviarémos recordatorios y su link de entrada.</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>