<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Surat Pengantar SKCK</title>
    <style>
        @page {
            size: 300px 500px
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            text-align: center;
            font-family: arial;
            position: absolute;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover,
        a:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <div class="card">
        <img src="assets/img/logo.png" style="width:100px;">
        <h3 style="text-align:center">Kartu Tanda Anggota</h3>
        <img src="{{ 'storage/' . $data->pas_foto }}" style="width:100px">
        <h3>Partai Kebangkitan Bangsa</h3>
        <p class="title">{{ $data->nama }}</p>
        {{-- <div style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div> --}}
        <p><button>{{ $data->phone }}</button></p>
    </div>
</body>
