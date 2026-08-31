<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kategori - PetCare</title>

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
            max-width: 850px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #6b7280;
            margin-bottom: 25px;
        }

        .form-card {
            background: white;
            border: none;
            border-radius: 18px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, .06);
            overflow: hidden;
        }

        .card-header-custom {
            padding: 22px 25px;
            border-bottom: 1px solid #eef0f3;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .header-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            background: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .card-header-custom h5 {
            margin: 0;
            font-weight: 700;
        }

        .card-header-custom small {
            color: #9ca3af;
        }

        .category-id {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 5px 10px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 600;
        }

        .form-body {
            padding: 30px 25px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .required {
            color: #dc2626;
        }

        .form-control {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 12px 14px;
            transition: .2s;
        }

        .form-control:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, .12);
        }

        textarea.form-control {
            min-height: 130px;
            resize: vertical;
        }

        .input-group-text {
            background: #f9fafb;
            border-color: #e5e7eb;
            color: #6b7280;
        }

        .input-group .input-group-text {
            border-radius: 10px 0 0 10px;
        }

        .input-group .form-control {
            border-radius: 0 10px 10px 0;
        }

        .form-help {
            color: #9ca3af;
            font-size: 13px;
            margin-top: 7px;
        }

        .btn-update {
            background: #2563eb;
            border: none;
            color: white;
            border-radius: 10px;
            padding: 11px 22px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-update:hover {
            background: #1d4ed8;
            color: white;
            transform: translateY(-1px);
        }

        .btn-back {
            background: #f3f4f6;
            color: #374151;
            border-radius: 10px;
            padding: 11px 20px;
            font-weight: 600;
            text-decoration: none;
            transition: .2s;
        }

        .btn-back:hover {
            background: #e5e7eb;
            color: #111827;
        }

        .error-box {
            border: none;
            border-radius: 12px;
            background: #fef2f2;
            color: #991b1b;
        }

        @media (max-width: 576px) {

            .page-container {
                padding: 25px 15px;
            }

            .form-body {
                padding: 22px 18px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn-update,
            .btn-back {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')


    <div class="page-container">

        {{-- PAGE HEADER --}}
        <div>

            <h1 class="page-title">
                <i class="bi bi-pencil-square me-2"></i>
                Edit Kategori Hewan
            </h1>

            <p class="page-subtitle">
                Perbarui informasi kategori hewan yang sudah terdaftar.
            </p>

        </div>


        {{-- ERROR VALIDATION --}}
        @if ($errors->any())

            <div class="alert error-box mb-4">

                <div class="fw-bold mb-2">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    Terjadi kesalahan
                </div>

                <ul class="mb-0 ps-4">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- FORM CARD --}}
        <div class="form-card">

            {{-- CARD HEADER --}}
            <div class="card-header-custom">

                <div class="header-icon">
                    <i class="bi bi-tag-fill"></i>
                </div>

                <div>

                    <h5>
                        Informasi Kategori
                    </h5>

                    <small>
                        ID Kategori:
                        <span class="category-id">
                            #{{ $category->id }}
                        </span>
                    </small>

                </div>

            </div>


            {{-- FORM BODY --}}
            <div class="form-body">

                <form
                    action="{{ route('category.update', $category->id) }}"
                    method="POST"
                >

                    @csrf
                    @method('PUT')


                    {{-- NAMA KATEGORI --}}
                    <div class="mb-4">

                        <label class="form-label">

                            Nama Kategori

                            <span class="required">*</span>

                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-tag"></i>
                            </span>

                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $category->name) }}"
                                placeholder="Contoh: Reptile"
                            >

                        </div>

                        <div class="form-help">
                            Masukkan nama kategori hewan.
                        </div>

                        @error('name')

                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- DESKRIPSI --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Deskripsi
                        </label>

                        <div class="input-group">

                            <span class="input-group-text align-items-start pt-3">
                                <i class="bi bi-card-text"></i>
                            </span>

                            <textarea
                                name="description"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Contoh: Kategori untuk hewan jenis reptil"
                            >{{ old('description', $category->description) }}</textarea>

                        </div>

                        <div class="form-help">
                            Berikan penjelasan singkat mengenai kategori ini.
                        </div>

                        @error('description')

                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- BUTTON --}}
                    <div class="form-actions d-flex justify-content-end gap-2 pt-3">

                        <a
                            href="{{ route('category.index') }}"
                            class="btn-back"
                        >

                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali

                        </a>


                        <button
                            type="submit"
                            class="btn-update"
                        >

                            <i class="bi bi-check-lg me-1"></i>
                            Update Kategori

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>













<!-- <!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>
<body>

    <h1>Edit Kategori Hewan</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form
        action="{{ route('category.update', $category->id) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <p>
            <label>Nama Kategori</label>
            <br>

            <input
                type="text"
                name="name"
                value="{{ $category->name }}"
            >
        </p>

        <p>
            <label>Deskripsi</label>
            <br>

            <textarea
                name="description"
                rows="4"
                cols="40"
            >{{ $category->description }}</textarea>
        </p>

        <button type="submit">
            Update
        </button>

        <a href="{{ route('category.index') }}">
            Kembali
        </a>

    </form>

</body>
</html> -->