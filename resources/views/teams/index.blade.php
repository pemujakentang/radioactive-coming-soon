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
                            {{-- ID --}}
                            <td>{{ $team->id }}</td>

                            {{-- Institusi --}}
                            <td>
                                {{ $team->tim1_institusi }}
                            </td>

                            {{-- Penyiar 1 --}}
                            <td>
                                <div>
                                    @if($team->tim1_penyiar1)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_penyiar1 }}
                                        </div>
                                    @endif

                                    @if($team->tim2_penyiar1)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_penyiar1 }}
                                        </div>
                                    @endif
                                    @if($team->tim3_penyiar1)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_penyiar1 }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- Penyiar 2 --}}
                            <td>
                                <div>
                                    @if($team->tim1_penyiar2)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_penyiar2 }}
                                        </div>
                                    @endif
                                    
                                    @if($team->tim2_penyiar2)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_penyiar2 }}
                                        </div>
                                    @endif

                                    @if($team->tim2_penyiar3)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_penyiar2 }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- Operator --}}
                            <td>
                                <div>
                                    @if($team->tim1_operator)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_operator }}
                                        </div>
                                    @endif

                                    @if($team->tim2_operator)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_operator }}
                                        </div>
                                    @endif

                                    @if($team->tim3_operator)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_operator }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- NIM Penyiar 1--}}
                            <td>
                                <div>
                                    @if($team->tim1_nims1)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_nims1 }}
                                        </div>
                                    @endif

                                    @if($team->tim2_nims1)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_nims1 }}
                                        </div>
                                    @endif

                                    @if($team->tim3_nims1)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_nims1 }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- NIM Penyiar 2 --}}
                            <td>
                                <div>
                                    @if($team->tim1_nims2)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_nims2 }}
                                        </div>
                                    @endif

                                    @if($team->tim2_nims2)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_nims2 }}
                                        </div>
                                    @endif

                                    @if($team->tim3_nims2)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_nims2 }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- NIM OP --}}
                            <td>
                                <div>
                                    @if($team->tim1_nimop)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_nimop }}
                                        </div>
                                    @endif

                                    @if($team->tim2_nimop)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_nimop }}
                                        </div>
                                    @endif

                                    @if($team->tim3_nimop)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_nimop }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- WA --}}
                            <td>
                                <div>
                                    @if($team->tim1_contact_wa)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_contact_wa }}
                                        </div>
                                    @endif

                                    @if($team->tim2_contact_wa)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_contact_wa }}
                                        </div>
                                    @endif

                                    @if($team->tim3_contact_wa)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_contact_wa }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- LINE --}}
                            <td>
                                <div>
                                    @if($team->tim1_contact_line)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-yellow-200 min-h-0 h-10">
                                            {{ $team->tim1_contact_line }}
                                        </div>
                                    @endif

                                    @if($team->tim2_contact_line)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-red-200 min-h-0 h-10">
                                            {{ $team->tim2_contact_line }}
                                        </div>
                                    @endif

                                    @if($team->tim3_contact_line)
                                        <div class="flex justify-start overflow-x-auto py-2 my-2 px-2 bg-blue-200 min-h-0 h-10">
                                            {{ $team->tim3_contact_line }}
                                        </div>
                                    @endif
                                </div>
                            </td>

                            {{-- Bukti Pembayaran --}}
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
</body>

</html>
