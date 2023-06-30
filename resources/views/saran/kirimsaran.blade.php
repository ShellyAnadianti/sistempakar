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
        @slot('pagetitle') Kirim Saran @endslot
        @slot('title') Kirim Saran @endslot
    @endcomponent
        <div class='row'>
            <form action="">
                <div class="form-group">
                    <label for="saran">Saran</label>
                    <textarea type="text" class="form-control " placeholder="masukkan saran"
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