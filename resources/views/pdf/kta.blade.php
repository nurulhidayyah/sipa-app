<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Kartu Tanda Anggota</title>
    <style>
        * {
            margin: 0;
            padding: 0
        }

        @page {
            size: 3.37in 2.12in
        }

        #judul {
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        #halaman {
            width: 3.37in;
            height: auto;
            position: absolute;
            margin-left: 0.5px
        }
    </style>
</head>

<body>
    <div id="halaman">
        <table style="line-height: 24px">
            <tr>
                <td colspan="12" style="background-color: green; padding-left: 10px; padding-top: 5px" width="700">
                    <img src="assets/img/logo.png" width="35" style="float: left">
                    <center>
                        <font style="line-height: 20px; font-size: 20px; font-style: bold; color: white">KARTU TANDA
                            ANGGOTA</font><br>
                        <font style="line-height: 20px; font-size: 20px; font-style: bold; color: white">Partai
                            Kebangkitan Bangsa</font><br>
                    </center>
                </td>
                <!-- <td></td> -->
                {{-- <td colspan="10" width="700" style="background-color: green">
                    <center>
                        <font style="line-height: 20px; font-size: 20px; font-style: bold; color: white">KARTU TANDA
                            ANGGOTA</font><br>
                        <font style="line-height: 20px; font-size: 20px; font-style: bold; color: white">Partai
                            Kebangkitan Bangsa</font><br>
                    </center>
                </td> --}}
            </tr>
            <tr>
                <td></td>
                <td colspan="2">No. ID</td>
                {{-- <td></td> --}}
                <td colspan="8">: {{ $data->id }}</td>
                <td rowspan="5">
                    <div style="overflow: hidden; height: 100px; padding-right: 10px">
                        <img src="{{ 'storage/' . $data->pas_foto }}" alt="" width="70px">
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Nama</td>
                {{-- <td></td> --}}
                <td colspan="8">: {{ $data->nama }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Alamat</td>
                {{-- <td></td> --}}
                <td colspan="8">: {{ $data->alamat }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" width="300">No. Telepon</td>
                {{-- <td></td> --}}
                <td colspan="8">: {{ $data->phone }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Status</td>
                {{-- <td></td> --}}
                <td colspan="8">: {{ $data->is_active }}</td>
            </tr>
        </table>
    </div>
</body>
