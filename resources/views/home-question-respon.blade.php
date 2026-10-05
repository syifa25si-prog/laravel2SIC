<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respon Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Halaman Respon Form</h5>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $nama }}</p>
                <p><strong>Email:</strong> {{ $email }}</p>
                <p><strong>Pertanyaan:</strong> {{ $pertanyaan }}</p>
                <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Kembali ke Home</a>
            </div>
        </div>
    </div>
</body>
</html>