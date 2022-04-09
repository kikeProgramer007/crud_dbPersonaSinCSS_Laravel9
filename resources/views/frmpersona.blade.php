<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FrmPersona</title>
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <center>

      <h1>FORMULARIO</h1>
        <h2>Datos de Persona</h2>
        <form action="registrar" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" id="nombre" name="nombre" required></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="number" id="edad" name="edad"required></td>
                </tr>
                <tr>
                    <td colspan="2"><br><center><button type="submit" >Guardar</button></center></td>
                </tr>
            </table>
        </form>
        @if (session('agregar'))
            <p>{{session('agregar')}}</p>
            @else
                <br>
        @endif
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th >Nombre</th>
                    <th >Edad</th>
                    <th colspan="2">Acción</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($personas as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->edad}}</td>
                <td><a href="/editar/{{$item->id}}"class="boton_edit">Editar</a></td>
                <td><form action="eliminar/{{$item->id}}" method= "POST">@method('DELETE')
                        @csrf
                        <button type="submit"class="boton_personalizado">Eliminar</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    
        @if (session('delete'))
            <p> {{session('delete')}}</p>
        @endif
    </center>
</body>
</html>

