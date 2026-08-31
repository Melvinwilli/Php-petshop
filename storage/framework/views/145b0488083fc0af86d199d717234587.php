<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Member - PetCare</title>

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

        .member-id {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 5px 10px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 600;
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

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-container">

        
        <h1 class="page-title">
            <i class="bi bi-pencil-square me-2"></i>
            Edit Member
        </h1>

        <p class="page-subtitle">
            Perbarui informasi pelanggan yang sudah terdaftar.
        </p>


        
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
                    <i class="bi bi-person-fill"></i>
                </div>

                <div>
                    <h5>Informasi Member</h5>

                    <small>
                        ID Member:
                        <span class="member-id">
                            #<?php echo e($member->id); ?>

                        </span>
                    </small>
                </div>

            </div>


            <div class="form-body">

                <form action="<?php echo e(route('member.update', $member->id)); ?>"
                      method="POST">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>


                    
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
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('name', $member->name)); ?>"
                                placeholder="Masukkan nama lengkap"
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
                                class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('phone', $member->phone)); ?>"
                                placeholder="Contoh: 081234567890"
                            >

                        </div>

                        <?php $__errorArgs = ['phone'];
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
                                class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan alamat lengkap"
                            ><?php echo e(old('address', $member->address)); ?></textarea>

                        </div>

                        <?php $__errorArgs = ['address'];
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

                        <a href="<?php echo e(route('member.index')); ?>"
                           class="btn-back">

                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali

                        </a>


                        <button type="submit"
                                class="btn-update">

                            <i class="bi bi-check-lg me-1"></i>
                            Update Member

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
    <title>Edit Member</title>
</head>
<body>

    <h1>Edit Member</h1>

    <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form action="<?php echo e(route('member.update', $member->id)); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <p>
            <label>Nama</label><br>
            <input type="text"
                   name="name"
                   value="<?php echo e($member->name); ?>">
        </p>

        <p>
            <label>Phone</label><br>
            <input type="text"
                   name="phone"
                   value="<?php echo e($member->phone); ?>">
        </p>

        <p>
            <label>Alamat</label><br>
            <textarea name="address"><?php echo e($member->address); ?></textarea>
        </p>

        <button type="submit">
            Update
        </button>

        <a href="<?php echo e(route('member.index')); ?>">
            Kembali
        </a>

    </form>

</body>
</html> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/admin/member/edit.blade.php ENDPATH**/ ?>