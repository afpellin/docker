<!DOCTYPE html>
<html>
<head>
    <title>Lista de Escalas</title>
</head>
<body>
    <h1>Escalas</h1>
    <ul>
        @foreach($escalas as $escala)
            <li>{{ $escala->nome }}</li>
        @endforeach
    </ul>
</body>
</html>
