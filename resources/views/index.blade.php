<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>LISTA DE MANZANAS INSERTADAS</h1>


        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Tipo </th>
                    <th>Precio por kilo</th>
                    
                    
                    <!-- Agregar más columnas según la estructura de tu tabla de usuarios -->
                </tr>
            </thead>
            <tbody>
                @foreach($manzanas as $manzana)
                    <tr>
                        <td>{{ $manzana->tipoManzana }}</td>
                        <td>{{ $manzana->precioKilo }}</td>
                    
                        <td> <button><a href="{{ route('manzanas.editar', ['manzanas' => $manzana]) }}"
                                       class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded">
                                        Editar
                                    </a></td> </button>
                        <td>   <form action="{{ route('manzanas.eliminar', ['manzanas' => $manzana]) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded">
                                            Eliminar </button>
                        </form></td>
                     

                        <!-- Agregar más columnas según la estructura de tu tabla de usuarios -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/">VOLVER AL INICIO</a>
</body>
</html>