<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kategori Hewan - PetCare</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            font-family: "Segoe UI", sans-serif;
            color: #1f2937;
        }

        .page-container {
            padding: 35px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-title {
            margin: 0;
            font-weight: 700;
            font-size: 28px;
            color: #111827;
        }

        .page-subtitle {
            margin-top: 5px;
            color: #6b7280;
            font-size: 14px;
        }

        .btn-add {
            background: #22c55e;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: 600;
            transition: .2s;
            text-decoration: none;
        }

        .btn-add:hover {
            background: #16a34a;
            color: white;
            transform: translateY(-1px);
        }

        .content-card {
            background: white;
            border-radius: 16px;
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
            overflow: hidden;
        }

        .card-top {
            padding: 20px 24px;
            border-bottom: 1px solid #eef0f3;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-top h5 {
            margin: 0;
            font-weight: 700;
        }

        .category-count {
            background: #dcfce7;
            color: #15803d;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: #f9fafb;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .4px;
            padding: 16px 20px;
            border: none;
        }

        .table tbody td {
            padding: 16px 20px;
            vertical-align: middle;
            border-color: #f1f5f9;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background: #f9fafb;
        }

        .category-id {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 38px;
            height: 32px;
            padding: 0 10px;
            background: #eff6ff;
            color: #2563eb;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
        }

        .category-name {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #111827;
        }

        .category-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .description {
            color: #6b7280;
            max-width: 450px;
        }

        .action-buttons {
            display: flex;
            gap: 7px;
        }

        .btn-action {
            width: 36px;
            height: 36px;
            border: none;
            border-radius: 9px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: .2s;
        }

        .btn-edit {
            background: #dbeafe;
            color: #2563eb;
        }

        .btn-edit:hover {
            background: #2563eb;
            color: white;
        }

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: white;
        }

        .alert-success-custom {
            border: none;
            border-radius: 10px;
            background: #dcfce7;
            color: #166534;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px !important;
        }

        .empty-icon {
            width: 65px;
            height: 65px;
            margin: auto;
            border-radius: 50%;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #9ca3af;
            margin-bottom: 15px;
        }

        .empty-state h6 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .empty-state p {
            color: #9ca3af;
            margin: 0;
        }

        @media (max-width: 768px) {

            .page-container {
                padding: 20px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .btn-add {
                width: 100%;
                text-align: center;
            }

            .card-top {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')


    <div class="page-container">

        {{-- HEADER --}}
        <div class="page-header">

            <div>
                <h1 class="page-title">
                    <i class="bi bi-tags-fill me-2"></i>
                    Kategori Hewan
                </h1>

                <div class="page-subtitle">
                    Kelola kategori hewan yang tersedia di PetCare.
                </div>
            </div>


            <a href="{{ route('category.create') }}"
               class="btn-add">

                <i class="bi bi-plus-lg me-1"></i>
                Tambah Kategori

            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))

            <div class="alert alert-success-custom alert-dismissible fade show mb-4">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        @endif


        {{-- TABLE CARD --}}
        <div class="content-card">

            <div class="card-top">

                <div>

                    <h5>
                        Daftar Kategori
                    </h5>

                    <small class="text-muted">
                        Jenis kategori hewan dalam sistem
                    </small>

                </div>


                <span class="category-count">

                    {{ $categories->count() }} Kategori

                </span>

            </div>


            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th width="80">
                                ID
                            </th>

                            <th>
                                Nama Kategori
                            </th>

                            <th>
                                Deskripsi
                            </th>

                            <th width="130">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($categories as $category)

                            <tr>

                                {{-- ID --}}
                                <td>

                                    <span class="category-id">

                                        #{{ $category->id }}

                                    </span>

                                </td>


                                {{-- NAMA --}}
                                <td>

                                    <div class="category-name">

                                        <div class="category-icon">

                                            <i class="bi bi-heart-pulse-fill"></i>

                                        </div>

                                        {{ $category->name }}

                                    </div>

                                </td>


                                {{-- DESKRIPSI --}}
                                <td>

                                    <span class="description">

                                        {{ $category->description ?? '-' }}

                                    </span>

                                </td>


                                {{-- AKSI --}}
                                <td>

                                    <div class="action-buttons">

                                        {{-- EDIT --}}
                                        <a href="{{ route('category.edit', $category->id) }}"
                                           class="btn-action btn-edit"
                                           title="Edit Kategori">

                                            <i class="bi bi-pencil-fill"></i>

                                        </a>


                                        {{-- DELETE --}}
                                        <form
                                            action="{{ route('category.destroy', $category->id) }}"
                                            method="POST"
                                            style="display:inline;"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn-action btn-delete"
                                                title="Hapus Kategori"
                                                onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                                            >

                                                <i class="bi bi-trash-fill"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>


                        @empty

                            <tr>

                                <td colspan="4"
                                    class="empty-state">

                                    <div class="empty-icon">

                                        <i class="bi bi-tags"></i>

                                    </div>

                                    <h6>
                                        Belum Ada Kategori
                                    </h6>

                                    <p>
                                        Silakan tambahkan kategori hewan baru.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>








<!-- <!DOCTYPE html>
<html>
<head>
    <title>Kategori Hewan</title>
</head>
<body>
    @include('layouts.navbar')

    <h1>Kategori Hewan</h1>

    <a href="{{ route('category.create') }}">
        + Tambah Kategori
    </a>

    <br><br>

    @if(session('success'))
        <p>
            {{ session('success') }}
        </p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($categories as $category)

                <tr>
                    <td>{{ $category->id }}</td>

                    <td>
                        {{ $category->name }}
                    </td>

                    <td>
                        {{ $category->description ?? '-' }}
                    </td>

                    <td>

                        <a href="{{ route('category.edit', $category->id) }}">
                            Edit
                        </a>

                        |

                        <form
                            action="{{ route('category.destroy', $category->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                            >
                                Hapus
                            </button>

                        </form>

                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="4">
                        Belum ada kategori.
                    </td>
                </tr>

            @endforelse

        </tbody>
    </table>

</body>
</html> -->