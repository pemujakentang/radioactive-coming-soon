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
        <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="teamdata_table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Reg ID</th>
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
                        {{-- <th data-priority="12">Status</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rac_teams as $team)
                        <tr>
                            <td>{{ $team->id }}</td>

                            <td>{{ $team->tim1_institusi }}</td>
                            <td>{{ $team->tim1_penyiar1 }}</td>
                            <td>{{ $team->tim1_penyiar2 }}</td>
                            <td>{{ $team->tim1_operator }}</td>
                            <td>{{ $team->tim1_nims1 }}</td>
                            <td>{{ $team->tim1_nims2 }}</td>
                            <td>{{ $team->tim1_nimop }}</td>
                            <td>{{ $team->tim1_contact_wa }}</td>
                            <td>{{ $team->tim1_contact_line }}</td>

                            <td>
                                <div style="max-width: 200px;max-height:200px;overflow:hidden">
                                    <a target="_blank" href={{ asset('storage/' . $team->payment_proof) }}>
                                        <img src={{ asset('storage/' . $team->payment_proof) }}
                                            style="width:100%;height:100%;object-fit:contain;" alt="">
                                    </a>
                                </div>
                            </td>
                            {{-- <td>{{ $team->status }}
                                <form action="/teams/{{ $team->id }}/edit" class="inline">
                                    @method('put')
                                    @csrf
                                    <button class="text-white bg-green-500 rounded text-sm px-2.5 py-1 m-1">
                                        Confirm Payment
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                        <tr>
                            <td>{{ $team->id }}</td>
                            
                            <td>{{ $team->tim2_institusi }}</td>
                            <td>{{ $team->tim2_penyiar1 }}</td>
                            <td>{{ $team->tim2_penyiar2 }}</td>
                            <td>{{ $team->tim2_operator }}</td>
                            <td>{{ $team->tim2_nims1 }}</td>
                            <td>{{ $team->tim2_nims2 }}</td>
                            <td>{{ $team->tim2_nimop }}</td>
                            <td>{{ $team->tim2_contact_wa }}</td>
                            <td>{{ $team->tim2_contact_line }}</td>

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
                <td>{{ $team->tim1_institusi }}</td>
                <td>{{ $team->tim1_penyiar1 }}</td>
                <td>{{ $team->tim1_penyiar2 }}</td>
                <td>{{ $team->tim1_operator }}</td>
                <td>{{ $team->tim1_nims1 }}</td>
                <td>{{ $team->tim1_nims2 }}</td>
                <td>{{ $team->tim1_nimop }}</td>
                <td>{{ $team->tim1_contact_wa }}</td>
                <td>{{ $team->tim1_contact_line }}</td>
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
