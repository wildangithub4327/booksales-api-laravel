<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Author / Penulis</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #28a745; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Daftar Penulis Buku (Author)</h1>
    <p><a href="/genres">&larr; Lihat Daftar Genre</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Foto File</th>
                <th>Biografi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author['id'] }}</td>
                <td><strong>{{ $author['name'] }}</strong></td>
                <td><code>{{ $author['photo'] }}</code></td>
                <td>{{ $author['bio'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
