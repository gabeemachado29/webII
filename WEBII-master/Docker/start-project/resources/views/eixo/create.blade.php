<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Eixo</title>
</head>
<body>
    <h1>Novo eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <form action="{{route('eixo.store')}}" method="POST">
        @csrf
        <input type="text" name="nome">
        <textarea rows="6" cols="30" name="descricao"></textarea><br>
        <input type="submit" value="Salvar">

    </form>
</body>
</html>