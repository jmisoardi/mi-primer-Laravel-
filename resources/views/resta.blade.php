<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resta de 2 Numeros</title>
</head>
<body>
    <h2>Resta 2 numeros</h2>
            
            <form action="/resta" method="post">
                {{-- Protección extra para los formularios con metodos POST --}}
                @csrf
                <label for="nume1">Numero 1:</label>
                <input type="number" name="nume1" id="nume1" required>
                <br>
                <br>
                <label for="nume2">Numero 2:</label>
                <input type="number" name="nume2" id="nume2" required>
                <br>
                <br>
                <button type="submit" >Resta</button>

            </form>
        <br>
        @if (isset($resta))

            <h1>El resultado es {{$resta}}</h1>
            
        @endif
        
        {{-- <a href="/suma">Sumar</a> --}}
    
        
    </body>
</html>