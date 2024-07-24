<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais informações - Eixo</title>
</head>
<body>
    <h1>Mais informações - Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <ul>
        <li><b>ID:</b>{{$eixo->id}}</li>
        <li><b>NOME:</b>{{$eixo->nome}}</li>
        <li><b>DESCRIÇÃO:</b>{{$eixo->descricao}}</li>
        <li><b>CRIADO:</b>{{$eixo->}}</li>
        <li><b>ALTERADO</b>:</b>{{$eixo->$id}}</li>
    </ul>
</body>
</html>