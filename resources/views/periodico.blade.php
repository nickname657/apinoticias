<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Periódico</title>
</head>
<body>


    
    <h1>Redireccionar por ID</h1>

    <form action="{{ route('periodicos') }}" method="POST">
        @csrf

        <label for="id">Seleccione un Periódico:</label><br>
        <select name="periodico_id" id="id"> <!-- Añade el atributo 'name' con el nombre del parámetro -->
            <option value="mostrar">Todos los periodicos</option>
            <option value="1">Periódico 1</option>
            <option value="2">Periódico 2</option>
            <option value="3">Periódico 3</option>
        </select><br><br>
        <div class="datas">
          {{--  <p>URL: {{ $periodico->url }}</p> --}}     
        </div>
        <button type="submit">Scrap</button>
    </form>

    
</body>
</html>