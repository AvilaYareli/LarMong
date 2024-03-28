<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
            .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table thead th {
        background-color: #333;
        color: #fff;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table tbody tr:hover {
        background-color: #ddd;
    }
            header {
              background-color: #f0f0f0; /* Cambia el color de fondo según tu diseño */
              text-align: center;
              padding: 50px 0; /* Espacio alrededor del encabezado */
            }
            
            h1 {
              font-size: 3em; /* Tamaño de la fuente grande */
              color: #333; /* Cambia el color del texto según tu diseño */
              text-transform: uppercase; /* Transforma el texto a mayúsculas */
              letter-spacing: 3px; /* Espaciado entre letras */
              font-weight: bold; /* Fuente en negrita */
              text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Sombra del texto */
            }
                    </style>
</head>
<body>
        <header>
        <h1>Yareli Hernandez Avila</h1>
        </header>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dat)
            <tr>
                <td>{{ $dat->_id }}</td>
                <td>{{ $dat->nombre }}</td>
                <td>{{ $dat->precio }}</td>
                <td>{{ $dat->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>