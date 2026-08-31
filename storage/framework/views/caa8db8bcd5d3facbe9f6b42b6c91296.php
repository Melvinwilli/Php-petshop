
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Hewan Transaction - PetCare</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        body {
            margin: 0;
            background: #f5f7fb;
            color: #14213d;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* =========================
           MAIN CONTAINER
        ========================= */

        .page-container {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            padding: 55px 20px 80px;
        }

        /* =========================
           PAGE TITLE
        ========================= */

        .page-title {
            margin-bottom: 22px;
        }

        .page-title h1 {
            margin: 0;
            font-size: 27px;
            font-weight: 700;
            color: #14213d;
        }

        .page-title p {
            margin-top: 5px;
            margin-bottom: 0;
            color: #718096;
            font-size: 14px;
        }

        /* =========================
           MAIN CARD
        ========================= */

        .form-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(20, 33, 61, 0.07);
        }

        /* =========================
           CARD HEADER
        ========================= */

        .card-header-custom {
            padding: 20px 22px;
            border-bottom: 1px solid #edf0f4;
            display: flex;
            align-items: center;
            gap: 13px;
            background: #ffffff;
        }

        .header-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #d9f9e5;
            color: #16b957;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
            flex-shrink: 0;
        }

        .header-content h4 {
            margin: 0;
            font-size: 18px;
            font-weight: 700;
            color: #14213d;
        }

        .header-content p {
            margin: 3px 0 0;
            font-size: 13px;
            color: #9aa4b2;
        }

        /* =========================
           CARD BODY
        ========================= */

        .card-body-custom {
            padding: 28px 22px 24px;
        }

        /* =========================
           TRANSACTION INFO
        ========================= */

        .transaction-info {
            background: #f7f9fc;
            border: 1px solid #edf0f4;
            border-radius: 10px;
            padding: 16px 18px;
            margin-bottom: 25px;
        }

        .transaction-info-title {
            font-size: 14px;
            font-weight: 700;
            color: #14213d;
            margin-bottom: 13px;
        }

        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 13px;
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .info-label {
            width: 135px;
            color: #718096;
        }

        .info-value {
            font-weight: 600;
            color: #14213d;
        }

        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 22px;
        }

        .form-label-custom {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #14213d;
            margin-bottom: 8px;
        }

        .required {
            color: #ef4444;
        }

        /* =========================
           SELECT
        ========================= */

        .input-group-custom {
            display: flex;
            width: 100%;
        }

        .input-icon {
            width: 38px;
            min-width: 38px;

            border: 1px solid #dfe4ea;
            border-right: none;

            border-radius: 9px 0 0 9px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #718096;
            background: #ffffff;
        }

        .form-select-custom {
            height: 44px;
            flex: 1;

            border: 1px solid #dfe4ea;
            border-radius: 0 9px 9px 0;

            padding: 0 13px;

            font-size: 14px;
            color: #4a5568;

            outline: none;
            background-color: #ffffff;
        }

        .form-select-custom:focus {
            border-color: #20c768;
            box-shadow: 0 0 0 2px rgba(32, 199, 104, 0.10);
        }

        /* =========================
           PRICE INFO
        ========================= */

        .price-info {
            display: flex;
            align-items: flex-start;
            gap: 10px;

            background: #f0fff5;
            border: 1px solid #d8f5e2;

            border-radius: 9px;

            padding: 13px 15px;
            margin-bottom: 25px;

            color: #47705a;
            font-size: 13px;
            line-height: 1.5;
        }

        .price-info i {
            color: #20c768;
            font-size: 17px;
            margin-top: 1px;
        }

        .price-info strong {
            color: #176b3c;
        }

        /* =========================
           ERROR
        ========================= */

        .alert-error {
            background: #fff1f1;
            border: 1px solid #ffd6d6;
            color: #b42323;

            border-radius: 9px;

            padding: 12px 15px;
            margin-bottom: 22px;

            font-size: 13px;
        }

        /* =========================
           BUTTON AREA
        ========================= */

        .button-area {
            display: flex;
            justify-content: flex-end;
            gap: 8px;

            padding-top: 2px;
        }

        .btn-custom {
            height: 40px;
            border: none;
            border-radius: 9px;

            padding: 0 17px;

            font-size: 13px;
            font-weight: 600;

            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;

            text-decoration: none;

            transition: 0.2s ease;
        }

        /* Kembali */

        .btn-back {
            background: #f1f3f5;
            color: #394b63;
        }

        .btn-back:hover {
            background: #e7eaee;
            color: #27384f;
        }

        /* Tambahkan */

        .btn-save {
            background: #20c768;
            color: #ffffff;
        }

        .btn-save:hover {
            background: #18b45b;
            color: #ffffff;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 576px) {

            .page-container {
                padding: 35px 15px 60px;
            }

            .page-title h1 {
                font-size: 23px;
            }

            .card-body-custom {
                padding: 23px 17px;
            }

            .card-header-custom {
                padding: 18px;
            }

            .info-label {
                width: 110px;
            }

            .button-area {
                justify-content: stretch;
            }

            .btn-custom {
                flex: 1;
            }

        }

    </style>
</head>

<body>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="page-container">

    

    <div class="page-title">

        <h1>
            <i class="bi bi-plus-circle"></i>
            Tambah Hewan
        </h1>

        <p>
            Tambahkan hewan ke dalam transaksi penitipan.
        </p>

    </div>


    

    <div class="form-card">

        

        <div class="card-header-custom">

            <div class="header-icon">
                <i class="bi bi-box-seam"></i>
            </div>

            <div class="header-content">

                <h4>
                    Informasi Transaction
                </h4>

                <p>
                    Pilih hewan yang akan ditambahkan ke transaksi
                </p>

            </div>

        </div>


        

        <div class="card-body-custom">


            

            <div class="transaction-info">

                <div class="transaction-info-title">
                    Informasi Transaksi
                </div>

                <div class="info-row">

                    <div class="info-label">
                        Invoice
                    </div>

                    <div class="info-value">
                        <?php echo e($transactionMaster->invoice); ?>

                    </div>

                </div>


                <div class="info-row">

                    <div class="info-label">
                        Tanggal Mulai
                    </div>

                    <div class="info-value">
                        <?php echo e($transactionMaster->date_start->format('d-m-Y')); ?>

                    </div>

                </div>


                <div class="info-row">

                    <div class="info-label">
                        Tanggal Pickup
                    </div>

                    <div class="info-value">
                        <?php echo e($transactionMaster->date_pickup->format('d-m-Y')); ?>

                    </div>

                </div>


                <div class="info-row">

                    <div class="info-label">
                        Lama Penitipan
                    </div>

                    <div class="info-value">

                        <?php echo e(max(1, $transactionMaster->date_start->diffInDays($transactionMaster->date_pickup))); ?>


                        hari

                    </div>

                </div>

            </div>


            

            <?php if(session('error')): ?>

                <div class="alert-error">

                    <i class="bi bi-exclamation-circle"></i>

                    <?php echo e(session('error')); ?>


                </div>

            <?php endif; ?>


            

            <form
                action="<?php echo e(route('transaction-detail.store', $transactionMaster->id)); ?>"
                method="POST"
            >

                <?php echo csrf_field(); ?>


                

                <div class="form-group">

                    <label
                        for="pet_id"
                        class="form-label-custom"
                    >
                        Hewan <span class="required">*</span>
                    </label>


                    <div class="input-group-custom">

                        <div class="input-icon">
                            <i class="bi bi-heart"></i>
                        </div>


                        <select
                            name="pet_id"
                            id="pet_id"
                            class="form-select-custom"
                            required
                        >

                            <option value="">
                                Pilih hewan
                            </option>


                            <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($pet->id); ?>">

                                    <?php echo e($pet->name); ?>


                                    -
                                    <?php echo e($pet->category->name ?? 'Tanpa Kategori'); ?>


                                </option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                    </div>

                </div>


                

                <div class="price-info">

                    <i class="bi bi-info-circle-fill"></i>

                    <div>

                        <strong>Informasi Harga</strong>
                        <br>

                        Harga akan dihitung otomatis berdasarkan
                        kategori hewan dan lama penitipan.

                    </div>

                </div>


                

                <div class="button-area">

                    <a
                        href="<?php echo e(route('transaction-master.show', $transactionMaster->id)); ?>"
                        class="btn-custom btn-back"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Kembali

                    </a>


                    <button
                        type="submit"
                        class="btn-custom btn-save"
                    >

                        <i class="bi bi-check-lg"></i>

                        Tambahkan Hewan

                    </button>

                </div>


            </form>

        </div>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
















<!-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Hewan Transaction</title>
</head>
<body>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Tambah Hewan ke Transaction</h1>

<p>
    Invoice:
    <?php echo e($transactionMaster->invoice); ?>

</p>

<p>
    Tanggal Mulai:
    <?php echo e($transactionMaster->date_start->format('d-m-Y')); ?>

</p>

<p>
    Tanggal Pickup:
    <?php echo e($transactionMaster->date_pickup->format('d-m-Y')); ?>

</p>

<p>
    Lama Penitipan:
    <?php echo e(max(1, $transactionMaster->date_start->diffInDays($transactionMaster->date_pickup))); ?>

    hari
</p>

<?php if(session('error')): ?>

    <p>
        <?php echo e(session('error')); ?>

    </p>

<?php endif; ?>

<form
    action="<?php echo e(route('transaction-detail.store', $transactionMaster->id)); ?>"
    method="POST"
>

    <?php echo csrf_field(); ?>

    <label>Hewan</label>
    <br>

    <select name="pet_id" required>

        <option value="">
            -- Pilih Hewan --
        </option>

        <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <option value="<?php echo e($pet->id); ?>">

                <?php echo e($pet->name); ?>


                -
                <?php echo e($pet->category->name ?? 'Tanpa Kategori'); ?>


            </option>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>

    <br><br>

    <p>
        <strong>
            Harga akan dihitung otomatis berdasarkan kategori hewan
            dan lama penitipan.
        </strong>
    </p>

    <button type="submit">
        Tambahkan
    </button>

    <a href="<?php echo e(route('transaction-master.show', $transactionMaster->id)); ?>">
        Kembali
    </a>

</form>

</body>
</html> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/transaction_detail/create.blade.php ENDPATH**/ ?>