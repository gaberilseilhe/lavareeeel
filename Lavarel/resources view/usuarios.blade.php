<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #343a40;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background-color: white;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h2>Usuários</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>ID Grupo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuarios)
                <tr>
                    <td>{{ $usuarios->id_usuario }}</td>
                    <td>{{ $usuarios->nome_usuario }}</td>
                    <td>{{ $usuarios->data_nascimento }}</td>
                    <td>{{ $usuarios->id_grupo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
