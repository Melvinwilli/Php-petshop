<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Pricelist - PetCare</title>

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
            padding: 35px 20px;
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
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* CARD */

        .form-card {
            background: white;
            border: none;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
            overflow: hidden;
        }

        /* CARD HEADER */

        .card-header-custom {
            padding: 20px 24px;
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

        .input-group .form-control {
            border-radius: 0 10px 10px 0;
        }

        /* PRICE BOX */

        .price-section {
            margin-top: 25px;
        }

        .price-title {
            font-size: 16px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 15px;
        }

        .price-box {
            background: #f9fafb;
            border: 1px solid #eef0f3;
            border-radius: 12px;
            padding: 16px;
            height: 100%;
        }

        .price-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .price-label {
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 7px;
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
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eef0f3;
        }

        .btn-update {
            background: #22c55e;
            border: none;
            color: white;
            border-radius: 10px;
            padding: 11px 22px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-update:hover {
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

        @media (max-width: 768px) {

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

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="page-container">

        

        <div>

            <h1 class="page-title">

                <i class="bi bi-pencil-square me-2"></i>

                Edit Pricelist

            </h1>

            <p class="page-subtitle">

                Perbarui informasi dan harga layanan penitipan hewan di PetCare.

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

                        <li><?php echo e($error); ?></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>


        

        <div class="form-card">

            

            <div class="card-header-custom">

                <div class="header-icon">

                    <i class="bi bi-tags-fill"></i>

                </div>

                <div>

                    <h5>
                        Informasi Pricelist
                    </h5>

                    <small>
                        Perbarui kategori dan harga penitipan
                    </small>

                </div>

            </div>


            

            <div class="form-body">

                <form action="<?php echo e(route('pricelist.update', $pricelist->id)); ?>"
                      method="POST">

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('PUT'); ?>


                    

                    <div class="mb-4">

                        <label for="category_id" class="form-label">

                            Kategori Hewan

                            <span class="required">*</span>

                        </label>

                        <div class="input-group">

                            <span class="input-group-text">

                                <i class="bi bi-tag-fill"></i>

                            </span>

                            <select name="category_id"
                                    id="category_id"
                                    class="form-select <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    required>

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <option
                                        value="<?php echo e($category->id); ?>"
                                        <?php echo e(old('category_id', $pricelist->category_id) == $category->id ? 'selected' : ''); ?>

                                    >

                                        <?php echo e($category->name); ?>


                                    </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                        </div>

                        <?php $__errorArgs = ['category_id'];
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


                    

                    <div class="price-section">

                        <div class="price-title">

                            <i class="bi bi-cash-stack me-2"></i>

                            Harga Penitipan

                        </div>


                        <div class="row g-3">


                            

                            <div class="col-md-4">

                                <div class="price-box">

                                    <div class="price-icon">

                                        <i class="bi bi-calendar-day"></i>

                                    </div>

                                    <label for="harga_harian"
                                           class="price-label">

                                        Harga Harian

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">
                                            Rp
                                        </span>

                                        <input
                                            type="number"
                                            name="harga_harian"
                                            id="harga_harian"
                                            class="form-control <?php $__errorArgs = ['harga_harian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(old('harga_harian', $pricelist->harga_harian)); ?>"
                                            placeholder="20000"
                                            min="0"
                                            required
                                        >

                                    </div>

                                    <?php $__errorArgs = ['harga_harian'];
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


                            

                            <div class="col-md-4">

                                <div class="price-box">

                                    <div class="price-icon">

                                        <i class="bi bi-calendar-week"></i>

                                    </div>

                                    <label for="harga_mingguan"
                                           class="price-label">

                                        Harga Mingguan

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">
                                            Rp
                                        </span>

                                        <input
                                            type="number"
                                            name="harga_mingguan"
                                            id="harga_mingguan"
                                            class="form-control <?php $__errorArgs = ['harga_mingguan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(old('harga_mingguan', $pricelist->harga_mingguan)); ?>"
                                            placeholder="120000"
                                            min="0"
                                            required
                                        >

                                    </div>

                                    <?php $__errorArgs = ['harga_mingguan'];
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


                            

                            <div class="col-md-4">

                                <div class="price-box">

                                    <div class="price-icon">

                                        <i class="bi bi-calendar-month"></i>

                                    </div>

                                    <label for="harga_bulanan"
                                           class="price-label">

                                        Harga Bulanan

                                    </label>

                                    <div class="input-group">

                                        <span class="input-group-text">
                                            Rp
                                        </span>

                                        <input
                                            type="number"
                                            name="harga_bulanan"
                                            id="harga_bulanan"
                                            class="form-control <?php $__errorArgs = ['harga_bulanan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(old('harga_bulanan', $pricelist->harga_bulanan)); ?>"
                                            placeholder="400000"
                                            min="0"
                                            required
                                        >

                                    </div>

                                    <?php $__errorArgs = ['harga_bulanan'];
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

                        </div>

                    </div>


                    

                    <div class="form-actions d-flex justify-content-end gap-2">

                        <a href="<?php echo e(route('pricelist.index')); ?>"
                           class="btn-back">

                            <i class="bi bi-arrow-left me-1"></i>

                            Kembali

                        </a>

                        <button type="submit"
                                class="btn-update">

                            <i class="bi bi-check-lg me-1"></i>

                            Update Pricelist

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
    <title>Edit Pricelist</title>
</head>
<body>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Edit Data Pricelist</h1>

<form action="<?php echo e(route('pricelist.update', $pricelist->id)); ?>" method="POST">

    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label for="category_id">Kategori Hewan</label>
    <br>

    <select name="category_id" id="category_id" required>

        <option value="">-- Pilih Kategori --</option>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <option
                value="<?php echo e($category->id); ?>"
                <?php echo e($pricelist->category_id == $category->id ? 'selected' : ''); ?>

            >
                <?php echo e($category->name); ?>

            </option>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>

    <br><br>


    <label for="harga_harian">Harga Harian</label>
    <br>

    <input
        type="number"
        name="harga_harian"
        id="harga_harian"
        value="<?php echo e($pricelist->harga_harian); ?>"
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
        value="<?php echo e($pricelist->harga_mingguan); ?>"
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
        value="<?php echo e($pricelist->harga_bulanan); ?>"
        placeholder="Contoh: 400000"
        required
    >

    <br><br><br>

    <button type="submit">Update</button>

    <a href="<?php echo e(route('pricelist.index')); ?>">Kembali</a>

</form>

</body>
</html> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/pricelist/edit.blade.php ENDPATH**/ ?>