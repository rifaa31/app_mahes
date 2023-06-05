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
            @php $i=1 @endphp
            @foreach ($booking as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td class="customer">{{ $item['customer'] }}</td>
                    <td class="location">{{ $item['location'] }}</td>
                    <td class="wedding_date">{{ $item['wedding_date'] }}</td>
                    <td class="number_phone">{{ $item['number_phone'] }}</td>
                    <td class="location_wedding">{{ $item['location_wedding'] }}</td>
                    <td class="status">{{ $item['status'] }}</td>
            @endforeach
        </tbody>
    </table>
</body>

</html>
