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
        @slot('pagetitle') Detail Gejala @endslot
        @slot('title') Detail Gejala @endslot
    @endcomponent
    <div class='card'>
        <div class="card-body">
        <a class='btn btn-primary btn-sm' href='adddetailgejala'>input detail gejala</a>
</div>
    </div>
        <div class='row'>
            <table class="table table-centered datatable dt-responsive nowrap table-card-list"
            style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>id penyakit</th>
                        <th>id gejala</th>
                        <th>cbr status</th>
                        <th>mb (master belive)</th>
                        <th>md (master disbelive)</th>
                        <th>w (weight)</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $no=1;   
                    @endphp
                    @foreach($detailgejala as $g)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $g->id_penyakit_r }}</td>
                        <td>{{ $g->id_gejala_r }}</td>
                        <td>{{ $g->cbr_status }}</td>
                        <td>{{ $g->mb }}</td>
                        <td>{{ $g->md }}</td>
                        <td>{{ $g->w }}</td>
                        <td>
                        <a class='text-warning' href='editdetailgejala/{{ $g->id }}'><i class='uil uil-pen font-size-18'></i></a>    
                        <a class='text-danger' href='deletedetailgejala/{{ $g->id }}'><i class='uil uil-trash-alt font-size-18'></i></a>    
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