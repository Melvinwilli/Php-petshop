





<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Hewan - PetCare</title>

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
            margin: auto;
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

        /* MAIN CARD */

        .detail-card {
            background: white;
            border-radius: 18px;
            border: none;
            overflow: hidden;

            box-shadow: 0 6px 25px rgba(0, 0, 0, .06);
        }

        /* CARD HEADER */

        .card-header-custom {
            padding: 25px;

            display: flex;
            align-items: center;
            gap: 18px;

            border-bottom: 1px solid #eef0f3;
        }

        .animal-icon {
            width: 65px;
            height: 65px;

            border-radius: 17px;

            background: #dcfce7;
            color: #16a34a;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 28px;
        }

        .animal-title h4 {
            margin: 0;
            font-weight: 700;
            color: #111827;
        }

        .animal-title p {
            margin: 4px 0 0;
            color: #9ca3af;
            font-size: 14px;
        }

        .animal-id {
            display: inline-block;

            background: #eff6ff;
            color: #2563eb;

            padding: 5px 9px;

            border-radius: 7px;

            font-size: 11px;
            font-weight: 600;
        }

        /* DETAIL BODY */

        .detail-body {
            padding: 30px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 16px;
            font-weight: 700;

            color: #111827;

            margin-bottom: 18px;
        }

        .section-title i {
            color: #22c55e;
        }

        /* DETAIL ITEM */

        .detail-item {
            background: #f9fafb;

            border: 1px solid #f0f1f3;

            border-radius: 12px;

            padding: 16px;

            height: 100%;

            transition: .2s;
        }

        .detail-item:hover {
            border-color: #d1d5db;
            transform: translateY(-1px);
        }

        .detail-label {
            display: block;

            color: #9ca3af;

            font-size: 12px;

            margin-bottom: 6px;

            text-transform: uppercase;

            letter-spacing: .4px;

            font-weight: 600;
        }

        .detail-value {
            color: #111827;

            font-size: 15px;

            font-weight: 600;
        }

        /* OWNER */

        .owner-box {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .owner-icon {
            width: 38px;
            height: 38px;

            border-radius: 10px;

            background: #dbeafe;
            color: #2563eb;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* GENDER */

        .gender-badge {
            display: inline-flex;
            align-items: center;

            gap: 5px;

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

        /* CATEGORY */

        .category-badge {
            display: inline-flex;
            align-items: center;

            gap: 5px;

            background: #f3f4f6;

            color: #374151;

            padding: 6px 10px;

            border-radius: 7px;

            font-size: 12px;

            font-weight: 600;
        }

        /* PHYSICAL */

        .physical-card {
            background: #f9fafb;

            border: 1px solid #f0f1f3;

            border-radius: 12px;

            padding: 20px;

            text-align: center;

            height: 100%;
        }

        .physical-icon {
            width: 42px;
            height: 42px;

            margin: auto;
            margin-bottom: 10px;

            border-radius: 11px;

            background: #dcfce7;
            color: #16a34a;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 18px;
        }

        .physical-value {
            font-size: 20px;
            font-weight: 700;
            color: #111827;
        }

        .physical-unit {
            font-size: 12px;
            color: #9ca3af;
        }

        /* DIVIDER */

        .divider {
            margin: 30px 0;

            border-top: 1px solid #eef0f3;
        }

        /* BUTTON */

        .action-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn-edit {
            background: #2563eb;
            color: white;

            padding: 11px 20px;

            border-radius: 10px;

            text-decoration: none;

            font-weight: 600;

            transition: .2s;
        }

        .btn-edit:hover {
            background: #1d4ed8;
            color: white;

            transform: translateY(-1px);
        }

        .btn-back {
            background: #f3f4f6;
            color: #374151;

            padding: 11px 20px;

            border-radius: 10px;

            text-decoration: none;

            font-weight: 600;

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

            .detail-body {
                padding: 20px;
            }

            .card-header-custom {
                padding: 20px;
            }

            .action-buttons {
                flex-direction: column-reverse;
            }

            .btn-edit,
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

            <i class="bi bi-eye-fill me-2"></i>

            Detail Hewan

        </h1>

        <p class="page-subtitle">

            Informasi lengkap mengenai hewan yang terdaftar.

        </p>


        {{-- DETAIL CARD --}}

        <div class="detail-card">


            {{-- CARD HEADER --}}

            <div class="card-header-custom">

                <div class="animal-icon">

                    <i class="bi bi-heart-fill"></i>

                </div>


                <div class="animal-title">

                    <h4>

                        {{ $penitipan->name }}

                    </h4>

                    <p>

                        ID Hewan:

                        <span class="animal-id">

                            #{{ $penitipan->id }}

                        </span>

                    </p>

                </div>

            </div>


            {{-- BODY --}}

            <div class="detail-body">


                {{-- DATA DASAR --}}

                <div class="section-title">

                    <i class="bi bi-info-circle-fill"></i>

                    Informasi Dasar

                </div>


                <div class="row g-3">


                    {{-- NAMA --}}

                    <div class="col-md-6">

                        <div class="detail-item">

                            <span class="detail-label">
                                Nama Hewan
                            </span>

                            <div class="detail-value">

                                <i class="bi bi-heart me-2"></i>

                                {{ $penitipan->name }}

                            </div>

                        </div>

                    </div>


                    {{-- GENDER --}}

                    <div class="col-md-6">

                        <div class="detail-item">

                            <span class="detail-label">
                                Jenis Kelamin
                            </span>

                            <div class="detail-value">

                                @if($penitipan->gender == 'Laki-laki')

                                    <span class="gender-badge gender-male">

                                        <i class="bi bi-gender-male"></i>

                                        Laki-laki

                                    </span>

                                @elseif($penitipan->gender == 'Perempuan')

                                    <span class="gender-badge gender-female">

                                        <i class="bi bi-gender-female"></i>

                                        Perempuan

                                    </span>

                                @else

                                    -

                                @endif

                            </div>

                        </div>

                    </div>


                    {{-- OWNER --}}

                    <div class="col-md-6">

                        <div class="detail-item">

                            <span class="detail-label">
                                Pemilik
                            </span>

                            <div class="owner-box">

                                <div class="owner-icon">

                                    <i class="bi bi-person-fill"></i>

                                </div>

                                <div class="detail-value">

                                    {{ $penitipan->member->name ?? '-' }}

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- CATEGORY --}}

                    <div class="col-md-6">

                        <div class="detail-item">

                            <span class="detail-label">
                                Kategori
                            </span>

                            <div>

                                <span class="category-badge">

                                    <i class="bi bi-tag-fill"></i>

                                    {{ $penitipan->category->name ?? '-' }}

                                </span>

                            </div>

                        </div>

                    </div>


                </div>


                <div class="divider"></div>


                {{-- FISIK --}}

                <div class="section-title">

                    <i class="bi bi-clipboard2-pulse-fill"></i>

                    Kondisi Fisik

                </div>


                <div class="row g-3">


                    {{-- BERAT --}}

                    <div class="col-md-4">

                        <div class="physical-card">

                            <div class="physical-icon">

                                <i class="bi bi-speedometer2"></i>

                            </div>

                            <div class="physical-value">

                                {{ $penitipan->weight ?? '-' }}

                            </div>

                            <div class="physical-unit">

                                kilogram

                            </div>

                        </div>

                    </div>


                    {{-- TINGGI --}}

                    <div class="col-md-4">

                        <div class="physical-card">

                            <div class="physical-icon">

                                <i class="bi bi-rulers"></i>

                            </div>

                            <div class="physical-value">

                                {{ $penitipan->height ?? '-' }}

                            </div>

                            <div class="physical-unit">

                                centimeter

                            </div>

                        </div>

                    </div>


                    {{-- UMUR --}}

                    <div class="col-md-4">

                        <div class="physical-card">

                            <div class="physical-icon">

                                <i class="bi bi-calendar-heart"></i>

                            </div>

                            <div class="physical-value">

                                {{ $penitipan->age ?? '-' }}

                            </div>

                            <div class="physical-unit">

                                tahun

                            </div>

                        </div>

                    </div>


                </div>


                <div class="divider"></div>


                {{-- BUTTON --}}

                <div class="action-buttons">


                    <a
                        href="{{ route('penitipan.index') }}"
                        class="btn-back"
                    >

                        <i class="bi bi-arrow-left me-1"></i>

                        Kembali

                    </a>


                    <a
                        href="{{ route('penitipan.edit', $penitipan->id) }}"
                        class="btn-edit"
                    >

                        <i class="bi bi-pencil-fill me-1"></i>

                        Edit Data

                    </a>


                </div>


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
    <title>Detail Hewan</title>
</head>
<body>

<h1>Detail Hewan</h1>

<p>
    <strong>ID:</strong>
    {{ $penitipan->id }}
</p>

<p>
    <strong>Nama Hewan:</strong>
    {{ $penitipan->name }}
</p>

<p>
    <strong>Jenis Kelamin:</strong>
    {{ $penitipan->gender }}
</p>

<p>
    <strong>Pemilik:</strong>
    {{ $penitipan->member->name ?? '-' }}
</p>

<p>
    <strong>Berat:</strong>
    {{ $penitipan->weight }} kg
</p>

<p>
    <strong>Tinggi:</strong>
    {{ $penitipan->height }} cm
</p>

<p>
    <strong>Umur:</strong>
    {{ $penitipan->age }} tahun
</p>

<p>
    <strong>Kategori:</strong>
    {{ $penitipan->category->name ?? '-' }}
</p>

<br>

<a href="{{ route('penitipan.edit', $penitipan->id) }}">
    Edit
</a>

&nbsp;

<a href="{{ route('penitipan.index') }}">
    Kembali
</a>

</body>
</html> -->