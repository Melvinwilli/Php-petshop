<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Transaction - PetCare</title>

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

        /* =========================
           HEADER
        ========================= */

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

        /* =========================
           BUTTON TAMBAH
        ========================= */

        .btn-add {
            background: #22c55e;
            color: white;
            border: none;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            transition: .2s;
        }

        .btn-add:hover {
            background: #16a34a;
            color: white;
            transform: translateY(-1px);
        }

        /* =========================
           ALERT
        ========================= */

        .alert-success-custom {
            border: none;
            border-radius: 10px;
            background: #dcfce7;
            color: #166534;
        }

        /* =========================
           CARD
        ========================= */

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

        .transaction-count {
            background: #dcfce7;
            color: #15803d;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        /* =========================
           TABLE
        ========================= */

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
            white-space: nowrap;
        }

        .table tbody td {
            padding: 16px 20px;
            vertical-align: middle;
            border-color: #f1f5f9;
            white-space: nowrap;
        }

        .table tbody tr {
            transition: .2s;
        }

        .table tbody tr:hover {
            background: #f9fafb;
        }

        /* =========================
           ID
        ========================= */

        .transaction-id {
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

        /* =========================
           INVOICE
        ========================= */

        .invoice {
            font-weight: 600;
            color: #111827;
        }

        .invoice i {
            color: #22c55e;
            margin-right: 7px;
        }

        /* =========================
           MEMBER
        ========================= */

        .member-name {
            display: flex;
            align-items: center;
            gap: 9px;
            font-weight: 600;
            color: #374151;
        }

        .member-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: #f0fdf4;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
        }

        /* =========================
           DATE
        ========================= */

        .date {
            color: #4b5563;
            font-size: 13px;
        }

        .date i {
            color: #6b7280;
            margin-right: 6px;
        }

        /* =========================
           DISCOUNT
        ========================= */

        .discount {
            display: inline-flex;
            align-items: center;
            background: #fff7ed;
            color: #ea580c;
            padding: 6px 10px;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 600;
        }

        /* =========================
           SUBTOTAL
        ========================= */

        .subtotal {
            font-weight: 700;
            color: #15803d;
        }

        /* =========================
           ACTION
        ========================= */

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

        /* DETAIL */

        .btn-view {
            background: #e0f2fe;
            color: #0284c7;
        }

        .btn-view:hover {
            background: #0284c7;
            color: white;
        }

        /* EDIT */

        .btn-edit {
            background: #dbeafe;
            color: #2563eb;
        }

        .btn-edit:hover {
            background: #2563eb;
            color: white;
        }

        /* DELETE */

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
        }

        .btn-delete:hover {
            background: #dc2626;
            color: white;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty-state {
            text-align: center;
            padding: 60px 20px !important;
        }

        .empty-icon {
            width: 65px;
            height: 65px;
            margin: auto;
            margin-bottom: 15px;
            border-radius: 50%;
            background: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #9ca3af;
        }

        .empty-state h6 {
            font-weight: 700;
            margin-bottom: 5px;
        }

        .empty-state p {
            color: #9ca3af;
            margin: 0;
        }

        /* =========================
           RESPONSIVE
        ========================= */

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
                text-align: center;
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

                    <i class="bi bi-receipt-cutoff me-2"></i>

                    Data Transaction

                </h1>

                <div class="page-subtitle">

                    Kelola data transaksi penitipan hewan PetCare

                </div>

            </div>


            <a href="<?php echo e(route('transaction-master.create')); ?>"
               class="btn btn-add">

                <i class="bi bi-plus-lg me-1"></i>

                Tambah Transaction

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
                        Daftar Transaction
                    </h5>

                    <small class="text-muted">
                        Informasi transaksi penitipan hewan
                    </small>

                </div>


                <span class="transaction-count">

                    <?php echo e($transactions->count()); ?> Transaction

                </span>

            </div>


            

            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th width="80">
                                ID
                            </th>

                            <th>
                                Invoice
                            </th>

                            <th>
                                Member
                            </th>

                            <th>
                                Date Start
                            </th>

                            <th>
                                Date Pickup
                            </th>

                            <th>
                                Discount
                            </th>

                            <th>
                                Subtotal
                            </th>

                            <th width="130">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        

                        <?php $__empty_1 = true; $__currentLoopData = $transactions->sortBy('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <tr>

                                

                                <td>

                                    <span class="transaction-id">

                                        #<?php echo e($transaction->id); ?>


                                    </span>

                                </td>


                                

                                <td>

                                    <span class="invoice">

                                        <i class="bi bi-receipt"></i>

                                        <?php echo e($transaction->invoice); ?>


                                    </span>

                                </td>


                                

                                <td>

                                    <div class="member-name">

                                        <div class="member-icon">

                                            <i class="bi bi-person-fill"></i>

                                        </div>

                                        <?php echo e($transaction->member->name ?? '-'); ?>


                                    </div>

                                </td>


                                

                                <td>

                                    <span class="date">

                                        <i class="bi bi-calendar-event"></i>

                                        <?php if($transaction->date_start): ?>

                                            <?php echo e(\Carbon\Carbon::parse($transaction->date_start)->format('d-m-Y')); ?>


                                        <?php else: ?>

                                            -

                                        <?php endif; ?>

                                    </span>

                                </td>


                                

                                <td>

                                    <span class="date">

                                        <i class="bi bi-calendar-check"></i>

                                        <?php if($transaction->date_pickup): ?>

                                            <?php echo e(\Carbon\Carbon::parse($transaction->date_pickup)->format('d-m-Y')); ?>


                                        <?php else: ?>

                                            -

                                        <?php endif; ?>

                                    </span>

                                </td>


                                

                                <td>

                                    <span class="discount">

                                        <i class="bi bi-percent me-1"></i>

                                        Rp <?php echo e(number_format($transaction->discount ?? 0, 0, ',', '.')); ?>


                                    </span>

                                </td>


                                

                                <td>

                                    <span class="subtotal">

                                        Rp <?php echo e(number_format($transaction->subtotal ?? 0, 0, ',', '.')); ?>


                                    </span>

                                </td>


                                

                                <td>

                                    <div class="action-buttons">


                                        

                                        <a href="<?php echo e(route('transaction-master.show', $transaction->id)); ?>"
                                           class="btn-action btn-view"
                                           title="Detail Transaction">

                                            <i class="bi bi-eye-fill"></i>

                                        </a>


                                        

                                        <a href="<?php echo e(route('transaction-master.edit', $transaction->id)); ?>"
                                           class="btn-action btn-edit"
                                           title="Edit Transaction">

                                            <i class="bi bi-pencil-fill"></i>

                                        </a>


                                        

                                        <form action="<?php echo e(route('transaction-master.destroy', $transaction->id)); ?>"
                                              method="POST"
                                              style="display: inline;"
                                              onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">

                                            <?php echo csrf_field(); ?>

                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit"
                                                    class="btn-action btn-delete"
                                                    title="Hapus Transaction">

                                                <i class="bi bi-trash-fill"></i>

                                            </button>

                                        </form>


                                    </div>

                                </td>

                            </tr>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            

                            <tr>

                                <td colspan="8"
                                    class="empty-state">

                                    <div class="empty-icon">

                                        <i class="bi bi-receipt"></i>

                                    </div>

                                    <h6>

                                        Belum Ada Transaction

                                    </h6>

                                    <p>

                                        Silakan tambahkan transaksi baru.

                                    </p>

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
















<!-- <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Data Transaction</h1>

<a href="<?php echo e(route('transaction-master.create')); ?>">
    + Tambah Transaction
</a>

<br><br>

<?php if(session('success')): ?>

    <p>
        <?php echo e(session('success')); ?>

    </p>

<?php endif; ?>

<table border="1" cellpadding="5" cellspacing="0">

    <thead>

        <tr>
            <th>ID</th>
            <th>Invoice</th>
            <th>Member</th>
            <th>Date Start</th>
            <th>Date Pickup</th>
            <th>Discount</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>

                <td>
                    <?php echo e($transaction->id); ?>

                </td>

                <td>
                    <?php echo e($transaction->invoice); ?>

                </td>

                <td>
                    <?php echo e($transaction->member->name ?? '-'); ?>

                </td>

                <td>
                    <?php echo e($transaction->date_start->format('d-m-Y')); ?>

                </td>

                <td>
                    <?php echo e($transaction->date_pickup->format('d-m-Y')); ?>

                </td>

                <td>
                    Rp <?php echo e(number_format($transaction->discount, 0, ',', '.')); ?>

                </td>

                <td>
                    Rp <?php echo e(number_format($transaction->subtotal, 0, ',', '.')); ?>

                </td>

                <td>

                    <a href="<?php echo e(route('transaction-master.show', $transaction->id)); ?>">
                        Detail
                    </a>

                    |

                    <a href="<?php echo e(route('transaction-master.edit', $transaction->id)); ?>">
                        Edit
                    </a>

                    |

                    <form
                        action="<?php echo e(route('transaction-master.destroy', $transaction->id)); ?>"
                        method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')"
                    >

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <tr>

                <td colspan="8">
                    Belum ada transaksi.
                </td>

            </tr>

        <?php endif; ?>

    </tbody>

</table> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/transaction_master/index.blade.php ENDPATH**/ ?>