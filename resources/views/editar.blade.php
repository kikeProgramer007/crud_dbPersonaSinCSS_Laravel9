<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrmPersona</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    
    <center>
      <h1>FORMULARIO</h1>
        <h2>Actualizar datos de Persona {{$notaActualizar->id}}</h2>
        <form action="/actualizar/{{$notaActualizar->id}}" method="POST">
            @method('PUT')
            @csrf
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" id="nombre" name="nombre" value="{{$notaActualizar->nombre}}"></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="number" id="edad" name="edad"value="{{$notaActualizar->edad}}"></td>
                </tr>
                <tr>
                    <td colspan="2"><br><center><button type="submit">Actualizar</button> <a href="/" class="boton">Regresar</a></center></td>
                </tr>
            </table>
           
        </form>
        @if (session('update'))
            <p>{{session('update')}}</p>
        @endif
    
    </center>
</body>
</html>

