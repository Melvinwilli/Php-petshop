
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Member - PetCare</title>

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
            background: #dcfce7;
            color: #16a34a;
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

        .form-body {
            padding: 30px 25px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
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
            min-height: 120px;
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

        .error-box {
            border: none;
            border-radius: 12px;
            background: #fef2f2;
            color: #991b1b;
        }

        .required {
            color: #dc2626;
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
                <i class="bi bi-person-plus-fill me-2"></i>
                Tambah Member
            </h1>

            <p class="page-subtitle">
                Tambahkan data pelanggan baru ke dalam sistem PetCare.
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

            <div class="card-header-custom">

                <div class="header-icon">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div>
                    <h5>Informasi Member</h5>

                    <small>
                        Isi informasi pelanggan dengan lengkap
                    </small>
                </div>

            </div>


            <div class="form-body">

                <form action="{{ route('member.store') }}" method="POST">

                    @csrf


                    {{-- NAMA --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Nama Lengkap
                            <span class="required">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-person"></i>
                            </span>

                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama lengkap"
                                value="{{ old('name') }}"
                                autocomplete="name"
                            >

                        </div>

                        @error('name')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- PHONE --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Nomor Telepon
                            <span class="required">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-telephone"></i>
                            </span>

                            <input
                                type="text"
                                name="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                placeholder="Contoh: 081234567890"
                                value="{{ old('phone') }}"
                                autocomplete="tel"
                            >

                        </div>

                        @error('phone')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- ALAMAT --}}
                    <div class="mb-4">

                        <label class="form-label">
                            Alamat
                            <span class="required">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text align-items-start pt-3">
                                <i class="bi bi-geo-alt"></i>
                            </span>

                            <textarea
                                name="address"
                                class="form-control @error('address') is-invalid @enderror"
                                placeholder="Masukkan alamat lengkap"
                            >{{ old('address') }}</textarea>

                        </div>

                        @error('address')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- ACTION --}}
                    <div class="form-actions d-flex justify-content-end gap-2 pt-3">

                        <a href="{{ route('member.index') }}"
                           class="btn-back">

                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali

                        </a>


                        <button type="submit"
                                class="btn-save">

                            <i class="bi bi-check-lg me-1"></i>
                            Simpan Member

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
    <title>Tambah Member</title>
</head>
<body>

    <h1>Tambah Member</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('member.store') }}" method="POST">

        @csrf

        <p>
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>

        <p>
            <label>Phone</label><br>
            <input type="text" name="phone" value="{{ old('phone') }}">
        </p>

        <p>
            <label>Alamat</label><br>
            <textarea name="address">{{ old('address') }}</textarea>
        </p>

        <button type="submit">
            Simpan
        </button>

        <a href="{{ route('member.index') }}">
            Kembali
        </a>

    </form>

</body>
</html> -->