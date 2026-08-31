<!DOCTYPE html>
<html>
<head>
    <title>Detail Kategori</title>
</head>
<body>

    <h1>Detail Kategori</h1>

    <p>
        <strong>ID:</strong>
        {{ $category->id }}
    </p>

    <p>
        <strong>Nama:</strong>
        {{ $category->name }}
    </p>

    <p>
        <strong>Deskripsi:</strong>
        {{ $category->description ?? '-' }}
    </p>

    <a href="{{ route('category.index') }}">
        Kembali
    </a>

</body>
</html>