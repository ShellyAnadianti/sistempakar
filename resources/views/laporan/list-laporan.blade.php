@extends('layouts.master')
@section('title')
    @lang('translation.Orders')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Laporan @endslot
        @slot('title') Laporan @endslot
    @endcomponent
    <div class='card'>
        <div class="card-body">
       
</div>
    </div>
        <div class='row'>
            <table class="table table-centered datatable dt-responsive nowrap table-card-list"
            style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>id_laporan</th>
                        <th>id_pasien</th>
                        <th>pasien</th>
                        <th>hasil_perhitungan_cf</th>
                        <th>hasil_perhitungan_cbr</th>
                        <th>hasil_diagnosa_cf</th>
                        <th>hasil_diagnosa_cbr</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php
                     $no=1;   
                    @endphp
                    @foreach($laporan as $g)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $g->id_laporan }}</td>
                        <td>{{ $g->id_pasien }}</td>
                        <td>{{ $g->pasien }}</td>
                        <td>{{ $g->hasil_perhitungan_cf }}</td>
                        <td>{{ $g->hasil_perhitungan_cbr }}</td>
                        <td>{{ $g->hasil_diagnosa_cf }}</td>
                        <td>{{ $g->hasil_diagnosa_cbr }}</td>
                        
                        
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    @endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection