@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') SISPAR @endslot
    @slot('title') Dashboard @endslot
@endcomponent 
SISTEM PAKAR GIGI DAN MULUT MENGGUNAKAN METODE CERTAINTY FACTOR DAN CASE BASED REASONING BERBASIS WEBSITE
<div class="container">
    <div class="row mt-3">
        <div class="col-4">
            <div class="card p-4 text-center">jumlah gejala 
                {{ count($gejala) }}</div>
            
        </div>

        <div class="col-4">
            <div class="card p-4 text-center">jumlah penyakit 
                {{ count($penyakit) }}</div>
            
        </div>


    </div>
</div>
@endsection
@section('script')
      
@endsection