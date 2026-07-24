<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Laporan Absensi UKM Seni & Budaya</title>

    <style>

        body{
            font-family: DejaVu Sans, sans-serif;
            font-size:12px;
        }

        h2{
            text-align:center;
            margin-bottom:5px;
        }

        p{
            text-align:center;
            margin-top:0;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th,
        table td{
            border:1px solid #000;
            padding:8px;
            text-align:center;
        }

        table th{
            background:#e5e5e5;
        }

    </style>

</head>

<body>

    <h2>

        LAPORAN ABSENSI UKM SENI & BUDAYA

    </h2>

    <p>

        Dicetak pada : {{ now()->format('d-m-Y H:i') }}

    </p>

    <table>

        <thead>

            <tr>

                <th>No</th>

                <th>Nama</th>

                <th>NIM</th>

                <th>Bidang</th>

                <th>Tanggal</th>

                <th>Jam Hadir</th>

                <th>Status</th>

            </tr>

        </thead>

        <tbody>

            @forelse($attendances as $attendance)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $attendance->user->name }}</td>

                    <td>{{ $attendance->user->nim }}</td>

                    <td>{{ $attendance->user->bidang }}</td>

                    <td>{{ $attendance->tanggal }}</td>

                    <td>{{ $attendance->jam_masuk }}</td>

                    <td>{{ $attendance->status }}</td>

                </tr>

            @empty

                <tr>

                    <td colspan="7">

                        Belum ada data absensi.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</body>

</html>