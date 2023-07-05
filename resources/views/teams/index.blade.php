<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UMN Radioactive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

</head>

<body class="antialiased">
    

    <div class="container w-full mx-auto px-2">

        <div id='table_container' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

            <table id="teamdata_table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Team ID</th>
                        <th data-priority="2">Institusi Asal</th>
                        <th data-priority="3">Penyiar 1</th>
                        <th data-priority="4">Penyiar 2</th>
                        <th data-priority="5">Operator</th>
                        <th data-priority="6">NIM Penyiar 1</th>
                        <th data-priority="7">NIM Penyiar 2</th>
                        <th data-priority="8">NIM Operator</th>
                        <th data-priority="9">WA</th>
                        <th data-priority="10">LINE</th>
                        <th data-priority="11">Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rac_teams as $team)
                        <tr>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->institusi }}</td>
                            <td>{{ $team->penyiar1 }}</td>
                            <td>{{ $team->penyiar2 }}</td>
                            <td>{{ $team->operator }}</td>
                            <td>{{ $team->nims1 }}</td>
                            <td>{{ $team->nims2 }}</td>
                            <td>{{ $team->nimop }}</td>
                            <td>{{ $team->contact_wa }}</td>
                            <td>{{ $team->contact_line }}</td>
                            <td>
                                <div style="max-width: 200px;max-height:200px;overflow:hidden">
                                    <a target="_blank" href={{ asset('storage/' . $team->payment_proof) }}>
                                        <img src={{ asset('storage/' . $team->payment_proof) }}
                                            style="width:100%;height:100%;object-fit:contain;" alt="">
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>
    <!--/container-->

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#teamdata_table').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    {{-- old table --}}
    {{-- <table border="1">
        <tr>
            <th>Team ID</th>
            <th>Institusi Asal</th>
            <th>Penyiar 1</th>
            <th>Penyiar 2</th>
            <th>Operator</th>
            <th>NIM Penyiar 1</th>
            <th>NIM Penyiar 2</th>
            <th>NIM Operator</th>
            <th>WA</th>
            <th>LINE</th>
            <th>Bukti Pembayaran</th>
        </tr>
        @foreach ($rac_teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->institusi }}</td>
                <td>{{ $team->penyiar1 }}</td>
                <td>{{ $team->penyiar2 }}</td>
                <td>{{ $team->operator }}</td>
                <td>{{ $team->nims1 }}</td>
                <td>{{ $team->nims2 }}</td>
                <td>{{ $team->nimop }}</td>
                <td>{{ $team->contact_wa }}</td>
                <td>{{ $team->contact_line }}</td>
                <td>
                    <div style="max-width: 200px;max-height:200px;overflow:hidden">
                        <a target="_blank" href={{ asset('storage/' . $team->payment_proof) }}>
                            <img src={{ asset('storage/' . $team->payment_proof) }}
                                style="width:100%;height:100%;object-fit:contain;" alt="">
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table> --}}
</body>

</html>
