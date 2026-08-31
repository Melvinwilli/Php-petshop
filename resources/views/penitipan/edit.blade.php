<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Hewan - PetCare</title>

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
            max-width: 950px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* HEADER */

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

        /* CARD */

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

        .animal-id {
            display: inline-block;

            background: #eff6ff;
            color: #2563eb;

            padding: 4px 9px;

            border-radius: 7px;

            font-size: 12px;
            font-weight: 600;
        }

        .form-body {
            padding: 30px 25px;
        }

        /* SECTION */

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 16px;
            font-weight: 700;

            color: #111827;

            margin-bottom: 20px;
            padding-bottom: 12px;

            border-bottom: 1px solid #eef0f3;
        }

        .section-title i {
            color: #22c55e;
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

            box-shadow:
                0 0 0 3px rgba(34, 197, 94, .12);
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

        .input-group .form-select {
            border-radius: 0 10px 10px 0;
        }

        /* HELP */

        .form-help {
            color: #9ca3af;
            font-size: 13px;
            margin-top: 7px;
        }

        /* DIVIDER */

        .form-divider {
            margin: 30px 0;
            border-top: 1px solid #eef0f3;
        }

        /* ERROR */

        .error-box {
            border: none;
            border-radius: 12px;

            background: #fef2f2;
            color: #991b1b;
        }

        /* BUTTON */

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

        /* RESPONSIVE */

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

        <h1 class="page-title">

            <i class="bi bi-pencil-square me-2"></i>

            Edit Data Penitipan

        </h1>

        <p class="page-subtitle">

            Perbarui informasi hewan yang terdaftar dalam sistem.

        </p>


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

                    <i class="bi bi-heart-pulse-fill"></i>

                </div>

                <div>

                    <h5>
                        Informasi Hewan
                    </h5>

                    <small>

                        ID Hewan:

                        <span class="animal-id">
                            #{{ $penitipan->id }}
                        </span>

                    </small>

                </div>

            </div>


            {{-- FORM BODY --}}

            <div class="form-body">


                <form
                    action="{{ route('penitipan.update', $penitipan->id) }}"
                    method="POST"
                >

                    @csrf
                    @method('PUT')


                    {{-- ========================= --}}
                    {{-- DATA DASAR --}}
                    {{-- ========================= --}}

                    <div class="section-title">

                        <i class="bi bi-info-circle-fill"></i>

                        Data Dasar Hewan

                    </div>


                    <div class="row">


                        {{-- NAMA --}}

                        <div class="col-md-6 mb-4">

                            <label class="form-label">

                                Nama Hewan

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-heart"></i>

                                </span>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $penitipan->name) }}"
                                    placeholder="Contoh: Kiko"
                                >

                            </div>

                            @error('name')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- GENDER --}}

                        <div class="col-md-6 mb-4">

                            <label class="form-label">

                                Jenis Kelamin

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-gender-ambiguous"></i>

                                </span>

                                <select
                                    name="gender"
                                    class="form-select @error('gender') is-invalid @enderror"
                                >

                                    <option value="">
                                        -- Pilih Jenis Kelamin --
                                    </option>

                                    <option
                                        value="Laki-laki"
                                        {{ old('gender', $penitipan->gender) == 'Laki-laki' ? 'selected' : '' }}
                                    >
                                        Laki-laki
                                    </option>

                                    <option
                                        value="Perempuan"
                                        {{ old('gender', $penitipan->gender) == 'Perempuan' ? 'selected' : '' }}
                                    >
                                        Perempuan
                                    </option>

                                </select>

                            </div>

                            @error('gender')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                    </div>


                    {{-- ========================= --}}
                    {{-- PEMILIK --}}
                    {{-- ========================= --}}

                    <div class="section-title mt-2">

                        <i class="bi bi-person-fill"></i>

                        Data Pemilik

                    </div>


                    <div class="mb-4">

                        <label class="form-label">

                            Pemilik Hewan

                            <span class="required">*</span>

                        </label>

                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-person"></i>

                            </span>

                            <select
                                name="member_id"
                                class="form-select @error('member_id') is-invalid @enderror"
                            >

                                <option value="">
                                    -- Pilih Pemilik --
                                </option>

                                @foreach ($members as $member)

                                    <option
                                        value="{{ $member->id }}"
                                        {{ old('member_id', $penitipan->member_id) == $member->id ? 'selected' : '' }}
                                    >

                                        {{ $member->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="form-help">

                            Pilih member yang merupakan pemilik hewan.

                        </div>

                        @error('member_id')

                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <div class="form-divider"></div>


                    {{-- ========================= --}}
                    {{-- DETAIL FISIK --}}
                    {{-- ========================= --}}

                    <div class="section-title">

                        <i class="bi bi-clipboard2-pulse-fill"></i>

                        Detail Fisik Hewan

                    </div>


                    <div class="row">


                        {{-- BERAT --}}

                        <div class="col-md-4 mb-4">

                            <label class="form-label">

                                Berat

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    name="weight"
                                    class="form-control @error('weight') is-invalid @enderror"
                                    value="{{ old('weight', $penitipan->weight) }}"
                                    step="0.01"
                                    min="0"
                                    placeholder="5.5"
                                >

                                <span class="input-group-text">
                                    kg
                                </span>

                            </div>

                            @error('weight')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- TINGGI --}}

                        <div class="col-md-4 mb-4">

                            <label class="form-label">

                                Tinggi

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    name="height"
                                    class="form-control @error('height') is-invalid @enderror"
                                    value="{{ old('height', $penitipan->height) }}"
                                    step="0.01"
                                    min="0"
                                    placeholder="40"
                                >

                                <span class="input-group-text">
                                    cm
                                </span>

                            </div>

                            @error('height')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- UMUR --}}

                        <div class="col-md-4 mb-4">

                            <label class="form-label">

                                Umur

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    name="age"
                                    class="form-control @error('age') is-invalid @enderror"
                                    value="{{ old('age', $penitipan->age) }}"
                                    min="0"
                                    placeholder="2"
                                >

                                <span class="input-group-text">
                                    tahun
                                </span>

                            </div>

                            @error('age')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                    </div>


                    {{-- ========================= --}}
                    {{-- KATEGORI --}}
                    {{-- ========================= --}}

                    <div class="section-title mt-2">

                        <i class="bi bi-tags-fill"></i>

                        Kategori Hewan

                    </div>


                    <div class="mb-4">

                        <label class="form-label">

                            Kategori

                            <span class="required">*</span>

                        </label>

                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-tag"></i>

                            </span>

                            <select
                                name="category_id"
                                class="form-select @error('category_id') is-invalid @enderror"
                            >

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                @foreach ($categories as $category)

                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id', $penitipan->category_id) == $category->id ? 'selected' : '' }}
                                    >

                                        {{ $category->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="form-help">

                            Pilih kategori hewan yang sesuai.

                        </div>

                        @error('category_id')

                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- ========================= --}}
                    {{-- BUTTON --}}
                    {{-- ========================= --}}

                    <div class="form-actions d-flex justify-content-end gap-2 pt-3">

                        <a
                            href="{{ route('penitipan.index') }}"
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

                            Update Hewan

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
<html>
<head>
    <title>Edit Penitipan</title>
</head>
<body>

@include('layouts.navbar')

<h1>Edit Data Penitipan Hewan</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('penitipan.update', $penitipan->id) }}" method="POST">

    @csrf
    @method('PUT')

    {{-- Nama Hewan --}}
    <p>
        <label>Nama Hewan</label><br>

        <input
            type="text"
            name="name"
            value="{{ old('name', $penitipan->name) }}"
            placeholder="Contoh: Kiko"
        >
    </p>

    {{-- Jenis Kelamin --}}
    <p>
        <label>Jenis Kelamin</label><br>

        <select name="gender">

            <option value="">
                -- Pilih Jenis Kelamin --
            </option>

            <option
                value="Laki-laki"
                {{ old('gender', $penitipan->gender) == 'Laki-laki' ? 'selected' : '' }}
            >
                Laki-laki
            </option>

            <option
                value="Perempuan"
                {{ old('gender', $penitipan->gender) == 'Perempuan' ? 'selected' : '' }}
            >
                Perempuan
            </option>

        </select>
    </p>

    {{-- Pemilik --}}
    <p>
        <label>Pemilik</label><br>

        <select name="member_id">

            <option value="">
                -- Pilih Pemilik --
            </option>

            @foreach ($members as $member)

                <option
                    value="{{ $member->id }}"
                    {{ old('member_id', $penitipan->member_id) == $member->id ? 'selected' : '' }}
                >
                    {{ $member->name }}
                </option>

            @endforeach

        </select>
    </p>

    {{-- Berat --}}
    <p>
        <label>Berat (kg)</label><br>

        <input
            type="number"
            name="weight"
            value="{{ old('weight', $penitipan->weight) }}"
            step="0.01"
            min="0"
        >
    </p>

    {{-- Tinggi --}}
    <p>
        <label>Tinggi (cm)</label><br>

        <input
            type="number"
            name="height"
            value="{{ old('height', $penitipan->height) }}"
            step="0.01"
            min="0"
        >
    </p>

    {{-- Umur --}}
    <p>
        <label>Umur (tahun)</label><br>

        <input
            type="number"
            name="age"
            value="{{ old('age', $penitipan->age) }}"
            min="0"
        >
    </p>

    {{-- Kategori --}}
    <p>
        <label>Kategori Hewan</label><br>

        <select name="category_id">

            <option value="">
                -- Pilih Kategori --
            </option>

            @foreach ($categories as $category)

                <option
                    value="{{ $category->id }}"
                    {{ old('category_id', $penitipan->category_id) == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>

            @endforeach

        </select>
    </p>

    <br>

    <button type="submit">
        Update
    </button>

    <a href="{{ route('penitipan.index') }}">
        Kembali
    </a>

</form>

</body>
</html> -->