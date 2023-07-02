@extends('layouts.masterpasien')
@section('title')
    @lang('translation.Orders')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') hasil diagnosa cf @endslot
        @slot('title')hasil diagnosa cf @endslot
    @endcomponent
    <div class="container">
       <div class="card">
        <div class="card-body">
            <h5>Penyakit yang mungkin terjadi: {{ $penyakitTerdiagnosa }}</h5>
        </div>
       </div>
    </div>
    @endsection
    @section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection