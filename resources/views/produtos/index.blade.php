<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto['id'] }}</td>
                    <td>{{ $produto['nome'] }}</td>
                    <td>{{ $produto['preco'] }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto['id']) }}">Ver</a>
                        <a href="{{ route('produtos.edit', $produto['id']) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>        
</body>
</html>