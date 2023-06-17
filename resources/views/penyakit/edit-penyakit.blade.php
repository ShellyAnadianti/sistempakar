@extends('layouts.master')
@section('title')
    @lang('translation.Add_Product')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Penyakit @endslot
        @slot('title') Edit Penyakit @endslot
    @endcomponent
    @foreach ($penyakit as $find )

    <form action="/updatepenyakit/{{ $find->id_penyakit }}" method="POST">
        @csrf 
        <div class="form-group">
            <label for="kode_penyakit">kode penyakit</label>
            <input type="text" class="form-control "
                name="kode_penyakit" value="{{ $find->kode_penyakit }}">
        </div>
        <div class="form-group">
            <label for="nama_penyakit">nama penyakit</label>
            <input type="text" class="form-control "
                name="nama_penyakit" value="{{ $find->nama_penyakit }}">
        </div>
        <button class='btn btn-primary btn-sm mt-3' type='submit'>
            simpan
        </button>
    </form>
    @endforeach
    @endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
@endsection