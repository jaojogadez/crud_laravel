<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Gasto</title>
</head>
<body>

    <h1>Cadastrar novo gasto</h1>

    <form action="{{ route('gastos.store') }}" method="POST">

        @csrf

        <label>Descrição:</label>
        <input type="text" name="descricao" required>

        <br><br>

        <label>Valor:</label>
        <input type="number" name="valor" step="0.01" required>

        <br><br>

        <label>Categoria:</label>
        <input type="text" name="categoria" required>

        <br><br>

        <label>Data:</label>
        <input type="date" name="data" required>

        <br><br>

        <button type="submit">Salvar gasto</button>

    </form>

    <br>

    <a href="{{ route('gastos.index') }}">Voltar</a>

</body>
</html>