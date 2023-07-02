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
        @slot('pagetitle') Saran @endslot
        @slot('title') Saran @endslot
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

                        <th>nama</th>
                        <th>email</th>
                        <th>saran</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php
                     $no=1;   
                    @endphp
                    @foreach($saran as $g)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->email }}</td>
                        <td>{{ $g->saran }}</td>
                        
                        
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