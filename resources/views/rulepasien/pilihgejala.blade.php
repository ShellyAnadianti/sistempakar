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
        @slot('pagetitle') Pilih Gejala @endslot
        @slot('title') Pilih Gejala @endslot
    @endcomponent
    <div class="container">
       <form action="/hasilkonsultasicf" method="POST">
            @csrf
       
                @foreach ( $gejala as $a )
                <div class="card">
                    <div class="card-body">
                    <div class="form-check">
                        <input type="checkbox" name="choicegejala[]" class='form-check-input' value="{{ $a->id_gejala }}">
                        <label for=""class='form-check-label'>{{ $a->nama_gejala }}</label>
                    </div>
                </div>
                    </div>
                @endforeach
                <button type="submit" class ="btn btn-primary">
                    Lihat Hasil Konsultasi
                </button>
            </form>
    </div>
    @endsection
    @section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection