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
            <table id="voc_table" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Reg ID</th>
                        <th data-priority="2">Institusi Asal</th>
                        <th data-priority="3">Nama Lengkap</th>
                        <th data-priority="4">Usia</th>
                        <th data-priority="5">Nomor Telepon</th>
                        <th data-priority="6">Email</th>
                        <th data-priority="7">NIM</th>
                        <th data-priority="8">Username</th>
                        <th data-priority="9">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voc as $submission)
                        <tr>
                            <td>{{ $submission->id }}</td>
                            <td>{{ $submission->institusi }}</td>
                            <td>{{ $submission->nama }}</td>
                            <td>{{ $submission->usia }}</td>
                            <td>{{ $submission->no_telp }}</td>
                            <td>{{ $submission->email }}</td>
                            <td>{{ $submission->nim }}</td>
                            <td>{{ $submission->uname }}</td>
                            <td><a href="{{ $submission->link }}">{{ $submission->link }}</a></td>
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

            var table = $('#voc_table').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
