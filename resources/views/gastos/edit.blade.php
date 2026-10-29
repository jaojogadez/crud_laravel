<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Gasto</title>
</head>
<body>
    <h1>Editar gasto</h1>

    <form action="{{ route('gastos.update', $gasto->id) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Descrição:</label>
        <input
            type="text"
            name="descricao"
            value="{{ $gasto->descricao }}"
            required
        >

        <br><br>

        <label>Valor:</label>
        <input
            type="number"
            name="valor"
            step="0.01"
            value="{{ $gasto->valor }}"
            required
        >

        <br><br>

        <label>Categoria:</label>
        <input
            type="text"
            name="categoria"
            value="{{ $gasto->categoria }}"
            required
        >

        <br><br>

        <label>Data:</label>
        <input
            type="date"
            name="data"
            value="{{ $gasto->data }}"
            required
        >

        <br><br>

        <button type="submit">Salvar alterações</button>

    </form>

    <br>

    <a href="{{ route('gastos.index') }}">Voltar</a>
</body>
</html>