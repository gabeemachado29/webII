<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Eixo</title>
</head>
<body>
    <h1>Alterar eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <form action="{{route('eixo.update')}}" method="POST">
        @csrf
        @method ('PUT')
        <input type="text" name="nome" value="{{$eixo->nome}}"><br>
        <textarea rows="6" cols="30" name="descricao" value="{{$eixo->descricao}}"></textarea><br>
        <input type="submit" value="Salvar">

    </form>
</body>
</html>