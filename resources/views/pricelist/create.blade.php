<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Pricelist - PetCare</title>

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

        /* CONTAINER */
        .page-container {
            max-width: 850px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* TITLE */
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #6b7280;
            margin-bottom: 20px;
        }

        /* CARD */
        .form-card {
            background: white;
            border: none;
            border-radius: 18px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, .06);
            overflow: hidden;
        }

        /* CARD HEADER */
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

            background: #dcfce7;
            color: #16a34a;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 21px;
            flex-shrink: 0;
        }

        .card-header-custom h5 {
            margin: 0;
            font-weight: 700;
        }

        .card-header-custom small {
            color: #9ca3af;
        }

        /* FORM BODY */
        .form-body {
            padding: 30px 25px;
        }

        /* LABEL */
        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .required {
            color: #dc2626;
        }

        /* INPUT */
        .form-control,
        .form-select {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 12px 14px;
            transition: .2s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, .12);
        }

        /* INPUT GROUP */
        .input-group-text {
            background: #f9fafb;
            border-color: #e5e7eb;
            color: #6b7280;
        }

        .input-group .input-group-text {
            border-radius: 10px 0 0 10px;
        }

        .input-group .form-control,
        .input-group .form-select {
            border-radius: 0 10px 10px 0;
        }

        /* PRICE GRID */
        .price-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;

            margin-top: 10px;
            margin-bottom: 25px;
        }

        .price-box {
            background: #f9fafb;
            border: 1px solid #eef0f3;

            border-radius: 14px;

            padding: 18px;

            transition: .2s;
        }

        .price-box:hover {
            border-color: #bbf7d0;
            transform: translateY(-2px);
        }

        .price-icon {
            width: 36px;
            height: 36px;

            border-radius: 9px;

            background: #dcfce7;
            color: #16a34a;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 10px;

            font-size: 16px;
        }

        .price-box .form-label {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .price-info {
            font-size: 12px;
            color: #9ca3af;
            margin-top: 6px;
        }

        /* SECTION */
        .form-section-title {
            display: flex;
            align-items: center;

            gap: 10px;

            margin-bottom: 20px;
            padding-bottom: 12px;

            border-bottom: 1px solid #eef0f3;
        }

        .form-section-title i {
            color: #16a34a;
            font-size: 18px;
        }

        .form-section-title span {
            font-weight: 700;
            color: #374151;
        }

        /* BUTTON */
        .btn-save {
            background: #22c55e;
            border: none;
            color: white;

            border-radius: 10px;

            padding: 11px 22px;

            font-weight: 600;

            transition: .2s;
        }

        .btn-save:hover {
            background: #16a34a;
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

        /* ERROR */
        .error-box {
            border: none;
            border-radius: 12px;

            background: #fef2f2;
            color: #991b1b;
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {

            .price-grid {
                grid-template-columns: 1fr;
            }

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

            .btn-save,
            .btn-back {
                width: 100%;
                text-align: center;
            }

        }
    </style>
</head>

<body>

    @include('layouts.navbar')


    <div class="page-container">

        {{-- PAGE HEADER --}}
        <div>

            <h1 class="page-title">
                <i class="bi bi-tags-fill me-2"></i>
                Tambah Pricelist
            </h1>

            <p class="page-subtitle">
                Tambahkan harga layanan penitipan hewan ke dalam sistem PetCare.
            </p>

        </div>


        {{-- ERROR --}}
        @if ($errors->any())

            <div class="alert error-box mb-4">

                <div class="fw-bold mb-2">

                    <i class="bi bi-exclamation-circle-fill me-2"></i>

                    Terjadi kesalahan

                </div>

                <ul class="mb-0 ps-4">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        {{-- FORM CARD --}}
        <div class="form-card">


            {{-- CARD HEADER --}}
            <div class="card-header-custom">

                <div class="header-icon">

                    <i class="bi bi-cash-stack"></i>

                </div>

                <div>

                    <h5>
                        Informasi Pricelist
                    </h5>

                    <small>
                        Isi harga layanan sesuai kategori hewan
                    </small>

                </div>

            </div>


            {{-- FORM BODY --}}
            <div class="form-body">

                <form action="{{ route('pricelist.store') }}"
                      method="POST">

                    @csrf


                    {{-- KATEGORI --}}
                    <div class="mb-4">

                        <label class="form-label">

                            Kategori Hewan

                            <span class="required">*</span>

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-grid-fill"></i>

                            </span>


                            <select
                                name="category_id"
                                class="form-select @error('category_id') is-invalid @enderror"
                                required
                            >

                                <option value="">
                                    -- Pilih Kategori --
                                </option>


                                @foreach ($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                    >

                                        {{ $category->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>


                        @error('category_id')

                            <div class="text-danger small mt-1">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>


                    {{-- SECTION HARGA --}}
                    <div class="form-section-title">

                        <i class="bi bi-currency-dollar"></i>

                        <span>
                            Harga Penitipan
                        </span>

                    </div>


                    {{-- PRICE GRID --}}
                    <div class="price-grid">


                        {{-- HARIAN --}}
                        <div class="price-box">

                            <div class="price-icon">

                                <i class="bi bi-sun-fill"></i>

                            </div>


                            <label class="form-label">

                                Harga Harian

                                <span class="required">*</span>

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">
                                    Rp
                                </span>

                                <input
                                    type="number"
                                    name="harga_harian"
                                    class="form-control @error('harga_harian') is-invalid @enderror"
                                    placeholder="50000"
                                    value="{{ old('harga_harian') }}"
                                    min="0"
                                    required
                                >

                            </div>


                            <div class="price-info">

                                Harga penitipan per hari.

                            </div>


                            @error('harga_harian')

                                <div class="text-danger small mt-1">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>


                        {{-- MINGGUAN --}}
                        <div class="price-box">

                            <div class="price-icon">

                                <i class="bi bi-calendar-week-fill"></i>

                            </div>


                            <label class="form-label">

                                Harga Mingguan

                                <span class="required">*</span>

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">
                                    Rp
                                </span>

                                <input
                                    type="number"
                                    name="harga_mingguan"
                                    class="form-control @error('harga_mingguan') is-invalid @enderror"
                                    placeholder="300000"
                                    value="{{ old('harga_mingguan') }}"
                                    min="0"
                                    required
                                >

                            </div>


                            <div class="price-info">

                                Harga untuk 7 hari.

                            </div>


                            @error('harga_mingguan')

                                <div class="text-danger small mt-1">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>


                        {{-- BULANAN --}}
                        <div class="price-box">

                            <div class="price-icon">

                                <i class="bi bi-calendar-month-fill"></i>

                            </div>


                            <label class="form-label">

                                Harga Bulanan

                                <span class="required">*</span>

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">
                                    Rp
                                </span>

                                <input
                                    type="number"
                                    name="harga_bulanan"
                                    class="form-control @error('harga_bulanan') is-invalid @enderror"
                                    placeholder="1000000"
                                    value="{{ old('harga_bulanan') }}"
                                    min="0"
                                    required
                                >

                            </div>


                            <div class="price-info">

                                Harga untuk 30 hari.

                            </div>


                            @error('harga_bulanan')

                                <div class="text-danger small mt-1">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>


                    </div>


                    {{-- ACTION --}}
                    <div class="form-actions d-flex justify-content-end gap-2 pt-3">

                        <a
                            href="{{ route('pricelist.index') }}"
                            class="btn-back"
                        >

                            <i class="bi bi-arrow-left me-1"></i>

                            Kembali

                        </a>


                        <button
                            type="submit"
                            class="btn-save"
                        >

                            <i class="bi bi-check-lg me-1"></i>

                            Simpan Pricelist

                        </button>

                    </div>


                </form>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>


















<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pricelist</title>
</head>
<body>

@include('layouts.navbar')

<h1>Tambah Data Pricelist</h1>

<form action="{{ route('pricelist.store') }}" method="POST">

    @csrf

    <label for="category_id">Kategori Hewan</label>
    <br>

    <select name="category_id" id="category_id" required>
        <option value="">-- Pilih Kategori --</option>

        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach

    </select>

    <br><br>


    <label for="harga_harian">Harga Harian</label>
    <br>

    <input
        type="number"
        name="harga_harian"
        id="harga_harian"
        placeholder="Contoh: 20000"
        required
    >

    <br><br>


    <label for="harga_mingguan">Harga Mingguan</label>
    <br>

    <input
        type="number"
        name="harga_mingguan"
        id="harga_mingguan"
        placeholder="Contoh: 120000"
        required
    >

    <br><br>


    <label for="harga_bulanan">Harga Bulanan</label>
    <br>

    <input
        type="number"
        name="harga_bulanan"
        id="harga_bulanan"
        placeholder="Contoh: 400000"
        required
    >

    <br><br><br>

    <button type="submit">Simpan</button>

    <a href="{{ route('pricelist.index') }}">Kembali</a>

</form>

</body>
</html> -->