<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form method="POST" action="{{ route('produtos.update', $produto['id']) }}">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto['nome'] }}">

        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco" value="{{ $produto['preco'] }}">

        <button type="submit">Atualizar</button>
    </form>    
</body>
</html>