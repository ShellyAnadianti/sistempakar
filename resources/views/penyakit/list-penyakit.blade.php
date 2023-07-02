@extends('layouts.master')
@section('title')
    Penyakit
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Penyakit @endslot
        @slot('title') Penyakit @endslot
    @endcomponent
    <div class='card'>
        <div class="card-body">
        <a class='btn btn-primary btn-sm' href='addpenyakit'>input penyakit</a>
</div>
    </div>
        <div class='row'>
            <table class="table table-centered datatable dt-responsive nowrap table-card-list"
            style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>kode penyakit</th>
                        <th>nama penyakit</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $no=1;   
                    @endphp
                    @foreach($penyakit as $g)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $g->kode_penyakit }}</td>
                        <td>{{ $g->nama_penyakit }}</td>
                        <td>
                        <a class='text-warning' href='editpenyakit/{{ $g->id_penyakit }}'><i class='uil uil-pen font-size-18'></i></a>    
                        <a class='text-danger' href='deletepenyakit/{{ $g->id_penyakit }}'><i class='uil uil-trash-alt font-size-18'></i></a>    
                        </td>
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