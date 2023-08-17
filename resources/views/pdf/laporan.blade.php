<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Laporan</h1>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>No Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>email</th>
        </tr>
        @foreach ($data as $laporan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $laporan->user->id }}</td>
            <td>{{ $laporan->user->nama }}</td>
            <td>{{ $laporan->user->alamat }}</td>
            <td>{{ $laporan->user->phone }}</td>
            <td>{{ $laporan->user->email }}</td>
        </tr>
    @endforeach
    </table>

</body>

</html>