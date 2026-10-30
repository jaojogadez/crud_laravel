<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Gastos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main class="container">
        <h1>Controle de Gastos</h1>
        @if (session('success'))
                <p style="color: green;">
                    {{ session('success') }}
                </p>
            @endif

            <h2>Meus Gastos</h2>
            <a class="btn-primary" href="{{ route('gastos.create') }}">
                + Cadastrar novo gasto
            </a>

            <br><br>

            <div class="table-container">
                <table border="1" cellpadding="10">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($gastos as $gasto)
                            <tr>
                                <td>{{ $gasto->descricao }}</td>
                                <td>{{ $gasto->categoria }}</td>
                                <td>{{ \Carbon\Carbon::parse($gasto->data)->format('d/m/Y') }}</td>
                                <td>R$ {{ number_format($gasto->valor, 2, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('gastos.edit', $gasto->id) }}">
                                        Editar
                                    </a>
                                    <form
                                        action="{{ route('gastos.destroy', $gasto->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este gasto?')"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Nenhum gasto cadastrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>        
    </main>
    

</body>
</html>