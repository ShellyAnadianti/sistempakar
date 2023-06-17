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
        @slot('pagetitle') Pasien @endslot
        @slot('title') Pasien @endslot
    @endcomponent
    
        <div class='row'>
            <table class="table table-centered datatable dt-responsive nowrap table-card-list"
            style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama pasien</th>
                        <th>alamat</th>
                        <th>gmail</th>
                        <th>username</th>
                        <th>password</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @php
                     $no=1;   
                    @endphp
                    @foreach($detailpasien as $g)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $g->nama_pasien }}</td>
                        <td>{{ $g->alamat }}</td>
                        <td>{{ $g->gmail }}</td>
                        <td>{{ $g->username }}</td>
                        <td>{{ $g->password }}</td>
                        
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