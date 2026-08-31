<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Member - PetCare</title>

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
            padding: 35px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-title {
            margin: 0;
            font-weight: 700;
            font-size: 28px;
            color: #111827;
        }

        .page-subtitle {
            margin-top: 5px;
            color: #6b7280;
            font-size: 14px;
        }

        .btn-add {
            background: #22c55e;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-add:hover {
            background: #16a34a;
            color: white;
            transform: translateY(-1px);
        }

        .content-card {
            background: white;
            border-radius: 16px;
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .05);
            overflow: hidden;
        }

        .card-top {
            padding: 20px 24px;
            border-bottom: 1px solid #eef0f3;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-top h5 {
            margin: 0;
            font-weight: 700;
        }

        .member-count {
            background: #dcfce7;
            color: #15803d;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: #f9fafb;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .4px;
            padding: 16px 20px;
            border: none;
        }

        .table tbody td {
            padding: 16px 20px;
            vertical-align: middle;
            border-color: #f1f5f9;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background: #f9fafb;
        }

        .member-id {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 38px;
            height: 32px;
            padding: 0 10px;
            background: #eff6ff;
            color: #2563eb;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
        }

        .member-name {
            font-weight: 600;
            color: #111827;
        }

        .phone {
            color: #4b5563;
        }

        .phone i {
            color: #22c55e;
            margin-right: 7px;
        }

        .address {
            color: #6b7280;
            max-width: 300px;
        }

        .action-buttons {
            display: flex;
            gap: 7px;
        }

        .btn-action {
            width: 36px;
            height: 36px;
            border: none;
            border-radius: 9px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: .2s;
        }

        .btn-edit {
            background: #dbeafe;
            color: #2563eb;
        }

        .btn-edit:hover {
            background: #2563eb;
            color: white;
        }

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: white;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px !important;
        }

        .empty-icon {
            width: 65px;
            height: 65px;
            margin: auto;
            border-radius: 50%;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #9ca3af;
            margin-bottom: 15px;
        }

        .empty-state h6 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .empty-state p {
            color: #9ca3af;
            margin: 0;
        }

        .alert-success-custom {
            border: none;
            border-radius: 10px;
            background: #dcfce7;
            color: #166534;
        }

        @media (max-width: 768px) {
            .page-container {
                padding: 20px;
            }

            .page-header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .btn-add {
                width: 100%;
            }

            .card-top {
                gap: 10px;
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-container">

        
        <div class="page-header">

            <div>
                <h1 class="page-title">
                    <i class="bi bi-people-fill me-2"></i>
                    Data Member
                </h1>

                <div class="page-subtitle">
                    Kelola data pelanggan PetCare
                </div>
            </div>

            <a href="<?php echo e(route('member.create')); ?>"
               class="btn btn-add">
                <i class="bi bi-plus-lg me-1"></i>
                Tambah Member
            </a>

        </div>


        
        <?php if(session('success')): ?>

            <div class="alert alert-success-custom alert-dismissible fade show mb-4">

                <i class="bi bi-check-circle-fill me-2"></i>

                <?php echo e(session('success')); ?>


                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>

            </div>

        <?php endif; ?>


        
        <div class="content-card">

            <div class="card-top">

                <div>
                    <h5>
                        Daftar Member
                    </h5>

                    <small class="text-muted">
                        Informasi pelanggan yang terdaftar
                    </small>
                </div>

                <span class="member-count">
                    <?php echo e($members->count()); ?> Member
                </span>

            </div>


            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>
                            <th width="80">ID</th>
                            <th>Nama</th>
                            <th>Phone</th>
                            <th>Alamat</th>
                            <th width="130">Aksi</th>
                        </tr>

                    </thead>


                    <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <tr>

                                
                                <td>
                                    <span class="member-id">
                                        #<?php echo e($member->id); ?>

                                    </span>
                                </td>


                                
                                <td>
                                    <span class="member-name">
                                        <?php echo e($member->name); ?>

                                    </span>
                                </td>


                                
                                <td>
                                    <span class="phone">
                                        <i class="bi bi-telephone-fill"></i>
                                        <?php echo e($member->phone); ?>

                                    </span>
                                </td>


                                
                                <td>
                                    <span class="address">
                                        <i class="bi bi-geo-alt-fill me-1"></i>
                                        <?php echo e($member->address); ?>

                                    </span>
                                </td>


                                
                                <td>

                                    <div class="action-buttons">

                                        
                                        <a href="<?php echo e(route('member.edit', $member->id)); ?>"
                                           class="btn-action btn-edit"
                                           title="Edit Member">

                                            <i class="bi bi-pencil-fill"></i>

                                        </a>


                                        
                                        <form action="<?php echo e(route('member.destroy', $member->id)); ?>"
                                              method="POST"
                                              style="display:inline;">

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit"
                                                    class="btn-action btn-delete"
                                                    title="Hapus Member"
                                                    onclick="return confirm('Apakah kamu yakin ingin menghapus member ini?')">

                                                <i class="bi bi-trash-fill"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <tr>

                                <td colspan="5" class="empty-state">

                                    <div class="empty-icon">
                                        <i class="bi bi-people"></i>
                                    </div>

                                    <h6>
                                        Belum Ada Member
                                    </h6>

                                    <p>
                                        Silakan tambahkan member baru.
                                    </p>

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>





<!-- <!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
</head>
<body>
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <h1>Data Member</h1>

    <a href="<?php echo e(route('member.create')); ?>">
        Tambah Member
    </a>

    <br><br>

    <?php if(session('success')): ?>
        <p><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($member->id); ?></td>
                    <td><?php echo e($member->name); ?></td>
                    <td><?php echo e($member->phone); ?></td>
                    <td><?php echo e($member->address); ?></td>
                    <td>

                        <a href="<?php echo e(route('member.edit', $member->id)); ?>">
                            Edit
                        </a>

                        <form action="<?php echo e(route('member.destroy', $member->id)); ?>"
                              method="POST"
                              style="display:inline;">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit"
                                    onclick="return confirm('Hapus member ini?')">
                                Hapus
                            </button>

                        </form>

                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="5">
                        Belum ada data member.
                    </td>
                </tr>

            <?php endif; ?>
        </tbody>
    </table>

</body>
</html> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/admin/member/index.blade.php ENDPATH**/ ?>