<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 8pt;
        }
    </style>
    <center>
        <h4>Laporan Pemesanan Maheswari Enterprise</h4>
        <br>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th data-sort="">No</th>
                <th data-sort="customer">Nama Pemesan</th>
                <th data-sort="location">Alamat</th>
                <th data-sort="wedding_date">Tanggal Pernikahan</th>
                <th data-sort="number_phone">Nomor Handphone</th>
                <th data-sort="location_wedding">Lokasi Pernikahan</th>
                <th data-sort="status">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td class="customer"><?php echo e($item['customer']); ?></td>
                    <td class="location"><?php echo e($item['location']); ?></td>
                    <td class="wedding_date"><?php echo e($item['wedding_date']); ?></td>
                    <td class="number_phone"><?php echo e($item['number_phone']); ?></td>
                    <td class="location_wedding"><?php echo e($item['location_wedding']); ?></td>
                    <td class="status"><?php echo e($item['status']); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH E:\applications\maheswari-app\resources\views/pages/booking/booking_pdf.blade.php ENDPATH**/ ?>