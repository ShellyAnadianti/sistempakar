@extends('layouts.masterpasien')
@section('title')
    Kirim Saran
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Kirim Saran @endslot
        @slot('title') Kirim Saran @endslot
    @endcomponent
        <div class='row'>
            <form method="POST" action="postsaran">                
        @csrf 
                <div class="form-group">
                    <label for="saran">Nama</label>
                    <textarea type="text" class="form-control " placeholder="masukkan nama anda"
                        name="nama"></textarea>
                </div>
                <div class="form-group">
                    <label for="saran">Email</label>
                    <textarea type="email" class="form-control " placeholder="masukkan email anda"
                        name="email"></textarea>
                </div>
                <div class="form-group">
                    <label for="saran">Saran</label>
                    <textarea type="text" class="form-control " placeholder="masukkan saran anda"
                        name="saran"></textarea>
                </div>
                <button type="submit" class ="btn btn-primary">
                    Kirim Saran
                </button>
            </form>
        </div>
    @endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>
@endsection