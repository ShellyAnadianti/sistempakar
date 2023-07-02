@extends('layouts.master')
@section('title')
    Gejala
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Gejala @endslot
        @slot('title') Gejala @endslot
    @endcomponent
    <div class='card'>
        <div class="card-body">
        <a class='btn btn-primary btn-sm' href='addgejala'>input gejala</a>
</div>
    </div>
        <div class='row'>
            <table class="table table-centered datatable dt-responsive nowrap table-card-list"
            style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>kode gejala</th>
                        <th>nama gejala</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $no=1;   
                    @endphp
                    @foreach($gejala as $g)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $g->kode_gejala }}</td>
                        <td>{{ $g->nama_gejala }}</td>
                        <td>
                        <a class='text-warning' href='editgejala/{{ $g->id_gejala }}'><i class='uil uil-pen font-size-18'></i></a>    
                        <a class='text-danger' href='deletegejala/{{ $g->id_gejala }}'><i class='uil uil-trash-alt font-size-18'></i></a>    
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