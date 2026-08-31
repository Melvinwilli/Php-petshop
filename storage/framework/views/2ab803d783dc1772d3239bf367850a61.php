
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Transaction - PetCare</title>

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
            max-width: 1100px;
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

        .transaction-icon {
            width: 65px;
            height: 65px;
            border-radius: 17px;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            flex-shrink: 0;
        }

        .transaction-title h4 {
            margin: 0;
            font-weight: 700;
            color: #111827;
        }

        .transaction-title p {
            margin: 5px 0 0;
            color: #9ca3af;
            font-size: 14px;
        }

        .invoice-badge {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 5px 9px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 600;
        }

        /* BODY */

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

        /* MEMBER */

        .member-box {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .member-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* DATE */

        .date-icon {
            color: #16a34a;
            margin-right: 8px;
        }

        /* DIVIDER */

        .divider {
            margin: 30px 0;
            border-top: 1px solid #eef0f3;
        }

        /* TABLE */

        .table-wrapper {
            border: 1px solid #eef0f3;
            border-radius: 12px;
            overflow: hidden;
        }

        .transaction-table {
            margin-bottom: 0;
            vertical-align: middle;
        }

        .transaction-table thead th {
            background: #f9fafb;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .4px;
            font-weight: 700;
            padding: 14px 16px;
            border-bottom: 1px solid #eef0f3;
            white-space: nowrap;
        }

        .transaction-table tbody td {
            padding: 15px 16px;
            border-bottom: 1px solid #f1f2f4;
            color: #374151;
            font-size: 14px;
        }

        .transaction-table tbody tr:last-child td {
            border-bottom: none;
        }

        .transaction-table tbody tr:hover {
            background: #fafafa;
        }

        .id-badge {
            background: #eff6ff;
            color: #2563eb;
            padding: 5px 8px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 600;
        }

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

        .pet-name {
            font-weight: 600;
            color: #111827;
        }

        .price {
            font-weight: 700;
            color: #111827;
        }

        /* ADD BUTTON */

        .btn-add {
            background: #16a34a;
            color: white;
            padding: 10px 17px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: .2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-add:hover {
            background: #15803d;
            color: white;
            transform: translateY(-1px);
        }

        /* DELETE BUTTON */

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
            border: none;
            padding: 7px 10px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            transition: .2s;
        }

        .btn-delete:hover {
            background: #fecaca;
            color: #b91c1c;
        }

        /* SUMMARY */

        .summary-box {
            margin-top: 25px;
            width: 100%;
            background: #f9fafb;
            border: 1px solid #eef0f3;
            border-radius: 14px;
            padding: 18px 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1.2fr;
            gap: 20px;
            align-items: center;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 0;
            color: #6b7280;
            font-size: 14px;
        }

        .summary-row strong {
            color: #111827;
        }

        .discount-value {
            color: #dc2626 !important;
        }

        .total-row {
            margin-top: 0;
            padding: 14px 0 14px 20px;
            border-top: none;
            border-left: 1px solid #e5e7eb;
            font-size: 17px;
            font-weight: 700;
            color: #111827;
        }

        .total-value {
            color: #16a34a;
            font-size: 19px;
            font-weight: 700;
        }

        /* EMPTY */

        .empty-state {
            text-align: center;
            padding: 35px 20px !important;
            color: #9ca3af !important;
        }

        .empty-state i {
            display: block;
            font-size: 32px;
            margin-bottom: 8px;
            color: #d1d5db;
        }

        /* ACTION */

        .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
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

        /* ALERT */

        .success-alert {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
            border-radius: 10px;
            padding: 12px 15px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            .page-container {
                padding: 25px 15px;
            }

            .detail-body {
                padding: 20px;
            }

            .card-header-custom {
                padding: 20px;
            }

            .summary-box {
                max-width: 100%;
            }

            .action-buttons {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn-back,
            .btn-add {
                width: 100%;
                justify-content: center;
                text-align: center;
            }

            .table-wrapper {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

    
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-container">

        
        <h1 class="page-title">
            <i class="bi bi-receipt-cutoff me-2"></i>
            Detail Transaction
        </h1>

        <p class="page-subtitle">
            Informasi lengkap mengenai transaksi penitipan hewan.
        </p>

        
        <div class="detail-card">

            
            <div class="card-header-custom">

                <div class="transaction-icon">
                    <i class="bi bi-receipt"></i>
                </div>

                <div class="transaction-title">

                    <h4>
                        Transaksi Penitipan
                    </h4>

                    <p>
                        Invoice:
                        <span class="invoice-badge">
                            <?php echo e($transactionMaster->invoice); ?>

                        </span>
                    </p>

                </div>

            </div>


            
            <div class="detail-body">

                
                <div class="section-title">
                    <i class="bi bi-info-circle-fill"></i>
                    Informasi Transaksi
                </div>


                <?php if(session('success')): ?>

                    <div class="success-alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <?php echo e(session('success')); ?>

                    </div>

                <?php endif; ?>


                <div class="row g-3">

                    
                    <div class="col-md-6">

                        <div class="detail-item">

                            <span class="detail-label">
                                Invoice
                            </span>

                            <div class="detail-value">
                                <i class="bi bi-receipt me-2"></i>
                                <?php echo e($transactionMaster->invoice); ?>

                            </div>

                        </div>

                    </div>


                    
                    <div class="col-md-6">

                        <div class="detail-item">

                            <span class="detail-label">
                                Member
                            </span>

                            <div class="member-box">

                                <div class="member-icon">
                                    <i class="bi bi-person-fill"></i>
                                </div>

                                <div class="detail-value">
                                    <?php echo e($transactionMaster->member->name ?? '-'); ?>

                                </div>

                            </div>

                        </div>

                    </div>


                    
                    <div class="col-md-4">

                        <div class="detail-item">

                            <span class="detail-label">
                                Tanggal Mulai
                            </span>

                            <div class="detail-value">

                                <i class="bi bi-calendar-check date-icon"></i>

                                <?php echo e($transactionMaster->date_start
                                    ? $transactionMaster->date_start->format('d-m-Y')
                                    : '-'); ?>


                            </div>

                        </div>

                    </div>


                    
                    <div class="col-md-4">

                        <div class="detail-item">

                            <span class="detail-label">
                                Tanggal Pickup
                            </span>

                            <div class="detail-value">

                                <i class="bi bi-calendar-x date-icon"></i>

                                <?php echo e($transactionMaster->date_pickup
                                    ? $transactionMaster->date_pickup->format('d-m-Y')
                                    : '-'); ?>


                            </div>

                        </div>

                    </div>


                    
                    <div class="col-md-4">

                        <div class="detail-item">

                            <span class="detail-label">
                                Lama Penitipan
                            </span>

                            <div class="detail-value">

                                <i class="bi bi-clock-history date-icon"></i>

                                <?php echo e($transactionMaster->date_start && $transactionMaster->date_pickup
                                    ? max(
                                        1,
                                        $transactionMaster->date_start
                                            ->diffInDays($transactionMaster->date_pickup)
                                    )
                                    : '-'); ?>


                                <?php if($transactionMaster->date_start && $transactionMaster->date_pickup): ?>
                                    hari
                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="divider"></div>


                
                <div class="section-title d-flex justify-content-between align-items-center">

                    <div>
                        <i class="bi bi-list-ul"></i>
                        Hewan Dalam Transaksi
                    </div>

                    <a href="<?php echo e(route('transaction-detail.create', $transactionMaster->id)); ?>"
                       class="btn-add">

                        <i class="bi bi-plus-lg"></i>
                        Tambah Hewan

                    </a>

                </div>


                
                <div class="table-wrapper">

                    <table class="table transaction-table">

                        <thead>

                            <tr>

                                <th width="60">
                                    ID
                                </th>

                                <th>
                                    Hewan
                                </th>

                                <th>
                                    Kategori
                                </th>

                                <th>
                                    Pricelist
                                </th>

                                <th>
                                    Total
                                </th>

                                <th width="100">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $transactionMaster->details ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <tr>

                                    <td>
                                        <span class="id-badge">
                                            #<?php echo e($detail->id); ?>

                                        </span>
                                    </td>


                                    <td>

                                        <span class="pet-name">

                                            <i class="bi bi-heart-fill me-1"
                                               style="color:#16a34a;"></i>

                                            <?php echo e($detail->pet->name ?? '-'); ?>


                                        </span>

                                    </td>


                                    <td>

                                        <span class="category-badge">

                                            <i class="bi bi-tag-fill"></i>

                                            <?php echo e($detail->pet->category->name ?? '-'); ?>


                                        </span>

                                    </td>


                                    <td>

                                        <span class="id-badge">
                                            #<?php echo e($detail->pricelist_id); ?>

                                        </span>

                                    </td>


                                    <td>

                                        <span class="price">

                                            Rp
                                            <?php echo e(number_format(
                                                $detail->total ?? 0,
                                                0,
                                                ',',
                                                '.'
                                            )); ?>


                                        </span>

                                    </td>


                                    <td>

                                        <form
                                            action="<?php echo e(route(
                                                'transaction-detail.destroy',
                                                $detail->id
                                            )); ?>"
                                            method="POST"
                                            onsubmit="return confirm(
                                                'Yakin ingin menghapus detail ini?'
                                            )"
                                        >

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button
                                                type="submit"
                                                class="btn-delete"
                                            >

                                                <i class="bi bi-trash-fill"></i>
                                                Hapus

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>

                                    <td colspan="6" class="empty-state">

                                        <i class="bi bi-inbox"></i>

                                        Belum ada hewan dalam transaksi.

                                    </td>

                                </tr>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>


                
                <div class="summary-box">

                    <div class="summary-row">
                        <span>Subtotal</span>
                        <strong>
                            Rp <?php echo e(number_format($transactionMaster->subtotal ?? 0, 0, ',', '.')); ?>

                        </strong>
                    </div>

                    <div class="summary-row">
                        <span>Discount</span>
                        <strong class="discount-value">
                            - Rp <?php echo e(number_format($transactionMaster->discount ?? 0, 0, ',', '.')); ?>

                        </strong>
                    </div>

                    <div class="summary-row total-row">
                        <span>Total Bayar</span>
                        <span class="total-value">
                            Rp <?php echo e(number_format(max(0, ($transactionMaster->subtotal ?? 0) - ($transactionMaster->discount ?? 0)), 0, ',', '.')); ?>

                        </span>
                    </div>

                </div>


                <div class="divider"></div>


                
                <div class="action-buttons">

                    <a
                        href="<?php echo e(route('transaction-master.index')); ?>"
                        class="btn-back"
                    >

                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>












<!-- <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h1>Detail Transaction</h1>

<p>
    Invoice:
    <?php echo e($transactionMaster->invoice); ?>

</p>

<p>
    Member:
    <?php echo e($transactionMaster->member->name ?? '-'); ?>

</p>

<p>
    Date Start:
    <?php echo e($transactionMaster->date_start->format('d-m-Y')); ?>

</p>

<p>
    Date Pickup:
    <?php echo e($transactionMaster->date_pickup->format('d-m-Y')); ?>

</p>

<p>
    Lama Penitipan:
    <?php echo e(max(1, $transactionMaster->date_start->diffInDays($transactionMaster->date_pickup))); ?>

    hari
</p>

<p>
    Discount:
    Rp <?php echo e(number_format($transactionMaster->discount, 0, ',', '.')); ?>

</p>

<hr>

<h2>Transaction Detail</h2>

<a href="<?php echo e(route('transaction-detail.create', $transactionMaster->id)); ?>">
    + Tambah Hewan
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
            <th>Transaction ID</th>
            <th>Hewan</th>
            <th>Kategori</th>
            <th>Pricelist ID</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $transactionMaster->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <tr>

                <td>
                    <?php echo e($detail->id); ?>

                </td>

                <td>
                    <?php echo e($detail->transaction_id); ?>

                </td>

                <td>
                    <?php echo e($detail->pet->name ?? '-'); ?>

                </td>

                <td>
                    <?php echo e($detail->pet->category->name ?? '-'); ?>

                </td>

                <td>
                    <?php echo e($detail->pricelist_id); ?>

                </td>

                <td>
                    Rp <?php echo e(number_format($detail->total, 0, ',', '.')); ?>

                </td>

                <td>

                    <form
                        action="<?php echo e(route('transaction-detail.destroy', $detail->id)); ?>"
                        method="POST"
                        style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus detail ini?')"
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

                <td colspan="7">
                    Belum ada hewan dalam transaksi.
                </td>

            </tr>

        <?php endif; ?>

    </tbody>

</table>

<br>

<p>
    <strong>
        Subtotal:
    </strong>

    Rp <?php echo e(number_format($transactionMaster->subtotal, 0, ',', '.')); ?>

</p>

<p>
    <strong>
        Discount:
    </strong>

    Rp <?php echo e(number_format($transactionMaster->discount, 0, ',', '.')); ?>

</p>

<p>
    <strong>
        Total Bayar:
    </strong>

    Rp
    <?php echo e(number_format(
            max(
                0,
                $transactionMaster->subtotal - $transactionMaster->discount
            ),
            0,
            ',',
            '.'
        )); ?>

</p>

<br>

<a href="<?php echo e(route('transaction-master.index')); ?>">
    Kembali
</a> --><?php /**PATH C:\Users\Admin\Documents\melvinlaravel\petshop\resources\views/transaction_master/show.blade.php ENDPATH**/ ?>