@extends('layouts.master')
@section('title')
    Edit Gejala
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Gejala @endslot
        @slot('title') Edit Gejala @endslot
    @endcomponent
    @foreach ($gejala as $find )

    <form action="/updategejala/{{ $find->id_gejala }}" method="POST">
        @csrf 
        <div class="form-group">
            <label for="kode_gejala">kode gejala</label>
            <input type="text" class="form-control "
                name="kode_gejala" value="{{ $find->kode_gejala }}">
        </div>
        <div class="form-group">
            <label for="nama_gejala">nama gejala</label>
            <input type="text" class="form-control "
                name="nama_gejala" value="{{ $find->nama_gejala }}">
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