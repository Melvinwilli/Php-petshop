<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Hewan - PetCare</title>

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

        /* HELP TEXT */

        .form-help {
            color: #9ca3af;
            font-size: 13px;
            margin-top: 7px;
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

        /* ERROR */

        .error-box {
            border: none;
            border-radius: 12px;

            background: #fef2f2;
            color: #991b1b;
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

        /* DIVIDER */

        .form-divider {
            margin: 30px 0;
            border-top: 1px solid #eef0f3;
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


        

        <h1 class="page-title">

            <i class="bi bi-heart-pulse-fill me-2"></i>

            Tambah Data Penitipan

        </h1>

        <p class="page-subtitle">

            Tambahkan informasi hewan yang akan dititipkan di PetCare.

        </p>


        

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

                    <i class="bi bi-heart-fill"></i>

                </div>

                <div>

                    <h5>
                        Informasi Hewan
                    </h5>

                    <small>
                        Isi data hewan dengan lengkap
                    </small>

                </div>

            </div>


            

            <div class="form-body">

                <form action="<?php echo e(route('penitipan.store')); ?>"
                      method="POST">

                    <?php echo csrf_field(); ?>


                    
                    
                    

                    <div class="section-title">

                        <i class="bi bi-info-circle-fill"></i>

                        Data Dasar Hewan

                    </div>


                    <div class="row">


                        

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
                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('name')); ?>"
                                    placeholder="Contoh: Kiko"
                                >

                            </div>

                            <?php $__errorArgs = ['name'];
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

                                Jenis Kelamin

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-gender-ambiguous"></i>

                                </span>

                                <select
                                    name="gender"
                                    class="form-select <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                >

                                    <option value="">
                                        -- Pilih Jenis Kelamin --
                                    </option>

                                    <option
                                        value="Laki-laki"
                                        <?php echo e(old('gender') == 'Laki-laki' ? 'selected' : ''); ?>

                                    >
                                        Laki-laki
                                    </option>

                                    <option
                                        value="Perempuan"
                                        <?php echo e(old('gender') == 'Perempuan' ? 'selected' : ''); ?>

                                    >
                                        Perempuan
                                    </option>

                                </select>

                            </div>

                            <?php $__errorArgs = ['gender'];
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
                                class="form-select <?php $__errorArgs = ['member_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            >

                                <option value="">
                                    -- Pilih Pemilik --
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

                        <div class="form-help">

                            Pilih member yang merupakan pemilik hewan.

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


                    <div class="form-divider"></div>


                    
                    
                    

                    <div class="section-title">

                        <i class="bi bi-clipboard2-pulse-fill"></i>

                        Detail Fisik Hewan

                    </div>


                    <div class="row">


                        

                        <div class="col-md-4 mb-4">

                            <label class="form-label">

                                Berat

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    name="weight"
                                    class="form-control <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('weight')); ?>"
                                    step="0.01"
                                    min="0"
                                    placeholder="5.5"
                                >

                                <span class="input-group-text">
                                    kg
                                </span>

                            </div>

                            <?php $__errorArgs = ['weight'];
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


                        

                        <div class="col-md-4 mb-4">

                            <label class="form-label">

                                Tinggi

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    name="height"
                                    class="form-control <?php $__errorArgs = ['height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('height')); ?>"
                                    step="0.01"
                                    min="0"
                                    placeholder="40"
                                >

                                <span class="input-group-text">
                                    cm
                                </span>

                            </div>

                            <?php $__errorArgs = ['height'];
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


                        

                        <div class="col-md-4 mb-4">

                            <label class="form-label">

                                Umur

                                <span class="required">*</span>

                            </label>

                            <div class="input-group">

                                <input
                                    type="number"
                                    name="age"
                                    class="form-control <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('age')); ?>"
                                    min="0"
                                    placeholder="2"
                                >

                                <span class="input-group-text">
                                    tahun
                                </span>

                            </div>

                            <?php $__errorArgs = ['age'];
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
                                class="form-select <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            >

                                <option value="">
                                    -- Pilih Kategori --
                                </option>

                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <option
                                        value="<?php echo e($category->id); ?>"
                                        <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>

                                    >

                                        <?php echo e($category->name); ?>


                                    </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                        </div>

                        <div class="form-help">

                            Pilih jenis atau kategori hewan, misalnya Reptile, Fish, Mammal, atau Bird.

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


                    
                    
                    

                    <div class="form-actions d-flex justify-content-end gap-2 pt-3">

                        <a
                            href="<?php echo e(route('penitipan.index')); ?>"
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

                            Simpan Hewan

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
    <title>Tambah Penitipan</title>
</head>
<body>

<h1>Tambah Data Penitipan Hewan</h1>

<?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<form action="<?php echo e(route('penitipan.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    
    <p>
        <label>Nama Hewan</label><br>

        <input
            type="text"
            name="name"
            value="<?php echo e(old('name')); ?>"
            placeholder="Contoh: Kiko"
        >
    </p>

    
    <p>
        <label>Jenis Kelamin</label><br>

        <select name="gender">

            <option value="">
                -- Pilih Jenis Kelamin --
            </option>

            <option
                value="Laki-laki"
                <?php echo e(old('gender') == 'Laki-laki' ? 'selected' : ''); ?>

            >
                Laki-laki
            </option>

            <option
                value="Perempuan"
                <?php echo e(old('gender') == 'Perempuan' ? 'selected' : ''); ?>

            >
                Perempuan
            </option>

        </select>
    </p>

    
    <p>
        <label>Pemilik</label><br>

        <select name="member_id">

            <option value="">
                -- Pilih Pemilik --
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
    </p>

    
    <p>
        <label>Berat (kg)</label><br>

        <input
            type="number"
            name="weight"
            value="<?php echo e(old('weight')); ?>"
            step="0.01"
            min="0"
            placeholder="Contoh: 5.5"
        >
    </p>

    
    <p>
        <label>Tinggi (cm)</label><br>

        <input
            type="number"
            name="height"
            value="<?php echo e(old('height')); ?>"
            step="0.01"
            min="0"
            placeholder="Contoh: 40"
        >
    </p>

    
    <p>
        <label>Umur (tahun)</label><br>

        <input
            type="number"
            name="age"
            value="<?php echo e(old('age')); ?>"
            min="0"
            placeholder="Contoh: 2"
        >
    </p>

    
    <p>
        <label>Kategori Hewan</label><br>

        <select name="category_id">

            <option value="">
                -- Pilih Kategori --
            </option>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option
                    value="<?php echo e($category->id); ?>"
                    <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>

                >
                    <?php echo e($category->name); ?>

                </option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>
    </p>

    <br>

    <button type="submit">
        Simpan
    </button>

    <a href="<?php echo e(route('penitipan.index')); ?>">
        Kembali
    </a>

</form>

</body>
</html> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/penitipan/create.blade.php ENDPATH**/ ?>