
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Penitipan Hewan - PetCare</title>

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

        /* PAGE */

        .page-container {
            padding: 35px;
        }

        /* HEADER */

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

        /* BUTTON ADD */

        .btn-add {
            background: #22c55e;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            transition: .2s;
        }

        .btn-add:hover {
            background: #16a34a;
            color: white;
            transform: translateY(-1px);
        }

        /* ALERT */

        .alert-success-custom {
            border: none;
            border-radius: 10px;
            background: #dcfce7;
            color: #166534;
        }

        /* CARD */

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

        .card-top small {
            color: #6b7280;
        }

        .animal-count {
            background: #dcfce7;
            color: #15803d;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* TABLE */

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
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px 20px;
            vertical-align: middle;
            border-color: #f1f5f9;
            white-space: nowrap;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background: #f9fafb;
        }

        /* ID */

        .animal-id {
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

        /* NAME */

        .animal-name {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #111827;
        }

        .animal-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        /* GENDER */

        .gender-badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 10px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 600;
        }

        .gender-male {
            background: #dbeafe;
            color: #2563eb;
        }

        .gender-female {
            background: #fce7f3;
            color: #db2777;
        }

        /* OWNER */

        .owner {
            color: #4b5563;
            font-weight: 500;
        }

        .owner i {
            color: #22c55e;
        }

        /* CATEGORY */

        .category-badge {
            display: inline-flex;
            align-items: center;
            background: #f3f4f6;
            color: #374151;
            padding: 6px 10px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 600;
        }

        /* DETAIL */

        .text-muted-custom {
            color: #6b7280;
            font-size: 13px;
        }

        /* ACTION */

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

        /* VIEW */

        .btn-view {
            background: #e0f2fe;
            color: #0284c7;
        }

        .btn-view:hover {
            background: #0284c7;
            color: white;
        }

        /* EDIT */

        .btn-edit {
            background: #dbeafe;
            color: #2563eb;
        }

        .btn-edit:hover {
            background: #2563eb;
            color: white;
        }

        /* DELETE */

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: white;
        }

        /* EMPTY */

        .empty-state {
            text-align: center;
            padding: 60px 20px !important;
        }

        .empty-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #9ca3af;
        }

        .empty-state h6 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .empty-state p {
            color: #9ca3af;
            margin: 0;
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            .page-container {
                padding: 20px;
            }

            .page-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .btn-add {
                width: 100%;
                text-align: center;
            }

            .card-top {
                gap: 10px;
                flex-direction: column;
                align-items: flex-start;
            }

        }

    </style>

</head>

<body>

    @include('layouts.navbar')

    <div class="page-container">

        {{-- HEADER --}}

        <div class="page-header">

            <div>

                <h1 class="page-title">

                    <i class="bi bi-heart-pulse-fill me-2"></i>

                    Data Penitipan Hewan

                </h1>

                <div class="page-subtitle">

                    Kelola data hewan yang sedang dititipkan di PetCare

                </div>

            </div>

            <a href="{{ route('penitipan.create') }}"
               class="btn btn-add">

                <i class="bi bi-plus-lg me-1"></i>

                Tambah Hewan

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

            {{-- CARD HEADER --}}

            <div class="card-top">

                <div>

                    <h5>
                        Daftar Hewan
                    </h5>

                    <small>
                        Data hewan yang terdaftar dalam sistem
                    </small>

                </div>

                <span class="animal-count">

                    {{ $penitipans->count() }} Hewan

                </span>

            </div>


            {{-- TABLE --}}

            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th width="80">
                                ID
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Jenis Kelamin
                            </th>

                            <th>
                                Pemilik
                            </th>

                            <th>
                                Berat
                            </th>

                            <th>
                                Tinggi
                            </th>

                            <th>
                                Umur
                            </th>

                            <th>
                                Kategori
                            </th>

                            <th width="130">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($penitipans as $penitipan)

                            <tr>

                                {{-- ID --}}

                                <td>

                                    <span class="animal-id">

                                        #{{ $penitipan->id }}

                                    </span>

                                </td>


                                {{-- NAMA --}}

                                <td>

                                    <div class="animal-name">

                                        <div class="animal-icon">

                                            <i class="bi bi-heart-fill"></i>

                                        </div>

                                        {{ $penitipan->name }}

                                    </div>

                                </td>


                                {{-- GENDER --}}

                                <td>

                                    @if($penitipan->gender == 'Laki-laki')

                                        <span class="gender-badge gender-male">

                                            <i class="bi bi-gender-male me-1"></i>

                                            Laki-laki

                                        </span>

                                    @elseif($penitipan->gender == 'Perempuan')

                                        <span class="gender-badge gender-female">

                                            <i class="bi bi-gender-female me-1"></i>

                                            Perempuan

                                        </span>

                                    @else

                                        <span class="text-muted-custom">
                                            -
                                        </span>

                                    @endif

                                </td>


                                {{-- PEMILIK --}}

                                <td>

                                    <span class="owner">

                                        <i class="bi bi-person-fill me-1"></i>

                                        {{ $penitipan->member->name ?? '-' }}

                                    </span>

                                </td>


                                {{-- BERAT --}}

                                <td>

                                    <span class="text-muted-custom">

                                        {{ $penitipan->weight ?? '-' }}

                                        @if($penitipan->weight)
                                            kg
                                        @endif

                                    </span>

                                </td>


                                {{-- TINGGI --}}

                                <td>

                                    <span class="text-muted-custom">

                                        {{ $penitipan->height ?? '-' }}

                                        @if($penitipan->height)
                                            cm
                                        @endif

                                    </span>

                                </td>


                                {{-- UMUR --}}

                                <td>

                                    <span class="text-muted-custom">

                                        {{ $penitipan->age ?? '-' }}

                                        @if($penitipan->age)
                                            tahun
                                        @endif

                                    </span>

                                </td>


                                {{-- KATEGORI --}}

                                <td>

                                    <span class="category-badge">

                                        <i class="bi bi-tag me-1"></i>

                                        {{ $penitipan->category->name ?? '-' }}

                                    </span>

                                </td>


                                {{-- AKSI --}}

                                <td>

                                    <div class="action-buttons">

                                        {{-- DETAIL --}}

                                        <a href="{{ route('penitipan.show', $penitipan->id) }}"
                                           class="btn-action btn-view"
                                           title="Lihat Detail">

                                            <i class="bi bi-eye-fill"></i>

                                        </a>


                                        {{-- EDIT --}}

                                        <a href="{{ route('penitipan.edit', $penitipan->id) }}"
                                           class="btn-action btn-edit"
                                           title="Edit">

                                            <i class="bi bi-pencil-fill"></i>

                                        </a>


                                        {{-- DELETE --}}

                                        <form action="{{ route('penitipan.destroy', $penitipan->id) }}"
                                              method="POST"
                                              style="display:inline;">

                                            @csrf

                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn-action btn-delete"
                                                    title="Hapus"
                                                    onclick="return confirm('Apakah kamu yakin ingin menghapus data hewan ini?')">

                                                <i class="bi bi-trash-fill"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="9"
                                    class="empty-state">

                                    <div class="empty-icon">

                                        <i class="bi bi-heart-pulse"></i>

                                    </div>

                                    <h6>
                                        Belum Ada Data Hewan
                                    </h6>

                                    <p>
                                        Silakan tambahkan data hewan baru.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
















<!-- <!DOCTYPE html>
<html>
<head>
    <title>Data Penitipan Hewan</title>
</head>
<body>
@include('layouts.navbar')

<h1>Data Penitipan Hewan</h1>

<a href="{{ route('penitipan.create') }}">
    + Tambah Hewan
</a>

<br><br>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="8" cellspacing="0">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Hewan</th>
            <th>Jenis Kelamin</th>
            <th>Pemilik</th>
            <th>Berat (kg)</th>
            <th>Tinggi (cm)</th>
            <th>Umur</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse($penitipans as $penitipan)

            <tr>

                <td>
                    {{ $penitipan->id }}
                </td>

                <td>
                    {{ $penitipan->name }}
                </td>

                <td>
                    {{ $penitipan->gender }}
                </td>

                <td>
                    {{ $penitipan->member->name ?? '-' }}
                </td>

                <td>
                    {{ $penitipan->weight }} kg
                </td>

                <td>
                    {{ $penitipan->height }} cm
                </td>

                <td>
                    {{ $penitipan->age }} tahun
                </td>

                <td>
                    {{ $penitipan->category->name ?? '-' }}
                </td>

                <td>

                    <a href="{{ route('penitipan.show', $penitipan->id) }}">
                        Lihat
                    </a>

                    |

                    <a href="{{ route('penitipan.edit', $penitipan->id) }}">
                        Edit
                    </a>

                    |

                    <form
                        action="{{ route('penitipan.destroy', $penitipan->id) }}"
                        method="POST"
                        style="display:inline;"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                        >
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="9">
                    Belum ada data penitipan.
                </td>
            </tr>

        @endforelse

    </tbody>

</table>

</body>
</html> -->