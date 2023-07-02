@extends('layouts.master')
@section('title')
    Tambah Detail Gejala
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Detail Gejala @endslot
        @slot('title') Add Detail Gejala @endslot
    @endcomponent
    <form action="postdetailgejala" method="POST">
        @csrf 
        <div class="form-group">
            <label for="id_penyakit_r">id penyakit</label>
            <input type="text" class="form-control "
                name="id_penyakit_r">
        </div>   
        <div class="form-group">
            <label for="id_gejala_r">id gejala</label>
            <input type="text" class="form-control "
                name="id_gejala_r">
        </div>
        <div class="form-group">
            <label for="cbr_status">status CBR</label>
            <input type="text" class="form-control "
                name="cbr_status">
        </div>
        <div class="form-group">
            <label for="mb">mb(master belive)</label>
            <input type="text" class="form-control "
                name="mb">
        </div>
        <div class="form-group">
            <label for="md">md(master disbelive)</label>
            <input type="text" class="form-control "
                name="md">
        </div>
        <div class="form-group">
            <label for="mb">w(weight)</label>
            <input type="text" class="form-control "
                name="w">
        </div>
        <button class='btn btn-primary btn-sm mt-3' type='submit'>
            simpan
        </button>
    </form>
    @endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js') }}"></script>
@endsection