@extends('layouts.masterpasien')
@section('title')
    Pilih Gejala
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
       <form id="form1" action="/hasilkonsultasicf" method="POST">
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
                {{-- <button type="submit" class ="btn btn-primary">
                    Lihat Hasil Konsultasi
                </button> --}}

                <input type="button" class ="btn btn-primary" onclick="submitForm('hasilkonsultasicf')" value="Hasil Konsultasi CF" />
                <input type="button" class ="btn btn-primary" onclick="submitForm('hasilkonsultasicbr')" value="Hasil Konsultasi CBR" />
            </form>
    </div>
    @endsection
    @section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script>

    <script type="text/javascript">
        function submitForm(action) {
          var form = document.getElementById('form1');
          form.action = action;
          form.submit();
        }
      </script>
@endsection