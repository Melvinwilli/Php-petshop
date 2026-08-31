<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Transaction - PetCare</title>

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
            max-width: 850px;
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
            font-size: 14px;
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
            color: #111827;
        }

        .card-header-custom small {
            color: #9ca3af;
        }

        /* FORM BODY */
        .form-body {
            padding: 30px 25px;
        }

        /* SECTION */
        .form-section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
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

        /* INFO */
        .form-info {
            font-size: 12px;
            color: #9ca3af;
            margin-top: 6px;
        }

        /* ERROR */
        .error-box {
            border: none;
            border-radius: 12px;
            background: #fef2f2;
            color: #991b1b;
        }

        /* BUTTON */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            padding-top: 10px;
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

            .btn-save,
            .btn-back {
                width: 100%;
                text-align: center;
            }
        }

    </style>
</head>


<body>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="page-container">

    
    <div>

        <h1 class="page-title">

            <i class="bi bi-receipt-cutoff me-2"></i>

            Tambah Transaction

        </h1>

        <p class="page-subtitle">

            Tambahkan data transaksi penitipan hewan baru ke PetCare.

        </p>

    </div>


    
    <?php if($errors->any()): ?>

        <div class="alert error-box mb-4">

            <div class="fw-bold mb-2">

                <i class="bi bi-exclamation-circle-fill me-2"></i>

                Terjadi kesalahan

            </div>

            <ul class="mb-0 ps-4">

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li>
                        <?php echo e($error); ?>

                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>


    
    <div class="form-card">


        
        <div class="card-header-custom">

            <div class="header-icon">

                <i class="bi bi-plus-circle-fill"></i>

            </div>

            <div>

                <h5>
                    Informasi Transaction
                </h5>

                <small>
                    Isi data transaksi penitipan hewan
                </small>

            </div>

        </div>


        
        <div class="form-body">

            <form
                action="<?php echo e(route('transaction-master.store')); ?>"
                method="POST"
            >

                <?php echo csrf_field(); ?>


                
                <div class="form-section-title">

                    <i class="bi bi-receipt"></i>

                    <span>
                        Informasi Transaksi
                    </span>

                </div>


                
                <div class="mb-4">

                    <label class="form-label">

                        Member

                        <span class="required">*</span>

                    </label>


                    <div class="input-group">

                        <span class="input-group-text">

                            <i class="bi bi-person-fill"></i>

                        </span>


                        <select
                            name="member_id"
                            class="form-select <?php $__errorArgs = ['member_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            required
                        >

                            <option value="">

                                -- Pilih Member --

                            </option>


                            <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option
                                    value="<?php echo e($member->id); ?>"
                                    <?php echo e(old('member_id') == $member->id ? 'selected' : ''); ?>

                                >

                                    <?php echo e($member->name); ?>


                                </option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>

                    </div>


                    <?php $__errorArgs = ['member_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <div class="text-danger small mt-1">

                            <?php echo e($message); ?>


                        </div>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>



                
                <div class="form-section-title mt-4">

                    <i class="bi bi-calendar-event"></i>

                    <span>
                        Periode Penitipan
                    </span>

                </div>


                <div class="row">


                    
                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            Date Start

                            <span class="required">*</span>

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-calendar-plus"></i>

                            </span>


                            <input
                                type="date"
                                name="date_start"
                                class="form-control <?php $__errorArgs = ['date_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('date_start')); ?>"
                                required
                            >

                        </div>


                        <?php $__errorArgs = ['date_start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                            <div class="text-danger small mt-1">

                                <?php echo e($message); ?>


                            </div>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>



                    
                    <div class="col-md-6 mb-4">

                        <label class="form-label">

                            Date Pickup

                            <span class="required">*</span>

                        </label>


                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-calendar-check"></i>

                            </span>


                            <input
                                type="date"
                                name="date_pickup"
                                class="form-control <?php $__errorArgs = ['date_pickup'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('date_pickup')); ?>"
                                required
                            >

                        </div>


                        <?php $__errorArgs = ['date_pickup'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                            <div class="text-danger small mt-1">

                                <?php echo e($message); ?>


                            </div>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                </div>



                
                <div class="form-section-title mt-2">

                    <i class="bi bi-percent"></i>

                    <span>
                        Diskon Transaksi
                    </span>

                </div>


                <div class="mb-4">

                    <label class="form-label">

                        Discount

                    </label>


                    <div class="input-group">

                        <span class="input-group-text">
                            Rp
                        </span>


                        <input
                            type="number"
                            name="discount"
                            class="form-control <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            value="<?php echo e(old('discount', 0)); ?>"
                            min="0"
                            placeholder="Contoh: 10000"
                        >

                    </div>


                    <div class="form-info">

                        Masukkan nominal diskon dalam Rupiah.

                    </div>


                    <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <div class="text-danger small mt-1">

                            <?php echo e($message); ?>


                        </div>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>



                
                <div class="form-actions">

                    <a
                        href="<?php echo e(route('transaction-master.index')); ?>"
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

                        Simpan Transaction

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
    <title>Tambah Transaction</title>
</head>
<body>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Tambah Data Transaction</h1>

<form
    action="<?php echo e(route('transaction-master.store')); ?>"
    method="POST"
>

    <?php echo csrf_field(); ?>

    <label>Member</label>
    <br>

    <select name="member_id" required>

        <option value="">
            -- Pilih Member --
        </option>

        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <option value="<?php echo e($member->id); ?>">
                <?php echo e($member->name); ?>

            </option>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>

    <br><br>

    <label>Date Start</label>
    <br>

    <input
        type="date"
        name="date_start"
        required
    >

    <br><br>

    <label>Date Pickup</label>
    <br>

    <input
        type="date"
        name="date_pickup"
        required
    >

    <br><br>

    <label>Discount</label>
    <br>

    <input
        type="number"
        name="discount"
        value="0"
        min="0"
    >

    <br><br>

    <button type="submit">
        Simpan
    </button>

    <a href="<?php echo e(route('transaction-master.index')); ?>">
        Kembali
    </a>

</form>

</body>
</html> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/transaction_master/create.blade.php ENDPATH**/ ?>