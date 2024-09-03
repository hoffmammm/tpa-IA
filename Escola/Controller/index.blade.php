<!DOCTYPE html>
<html>
<head>
    <title>Professores</title>
</head>
<body>
    <h1>Professores</h1>
    <a href="{{ route('professores.create') }}">Adicionar Novo Professor</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
                <tr>
                    <td>{{ $professor->id }}</td>
                    <td>{{ $professor->nome }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>
                        <a href="{{ route('professores.show', $professor->id) }}">Ver</a>
                        <a href="{{ route('professores.edit', $professor->id) }}">Editar</a>
                        <form action="{{ route('professores.destroy', $professor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
