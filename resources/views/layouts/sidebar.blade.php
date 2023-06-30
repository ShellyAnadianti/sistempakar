<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('index')}}" class="logo logo-dark">
            <span class="logo-sm">
             SISPAR GIGI DAN MULUT
            </span>
            <span class="logo-lg">
                SISPAR GIGI DAN MULUT
            </span>
        </a>

        <a href="{{url('index')}}" class="logo logo-light">
            <span class="logo-sm">
                SISPAR GIGI DAN MULUT
            </span>
            <span class="logo-lg">
                SISPAR GIGI DAN MULUT
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>
                @if (Auth::user()->role == 'admin')
                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('dashboard')}}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span>Dashboard Admin</span>
                    </a>
                </li>
                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('gejala')}}">
                        <i class="uil-bing"></i>
                        <span>Gejala</span>
                    </a>
                </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('penyakit')}}">
                        <i class="uil-bing"></i>
                        <span>Penyakit</span>
                    </a>
                </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('detailgejala')}}">
                        <i class="uil-bing"></i>
                        <span>Detail Gejala</span>
                    </a>
                </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('detailpasien')}}">
                        <i class="uil-bing"></i>
                        <span>Detail Pasien</span>
                    </a>
                </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('laporan')}}">
                        <i class="uil-bing"></i>
                        <span>Laporan</span>
                    </a>
                    </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('saran')}}">
                        <i class="uil-bing"></i>
                        <span>Saran</span>
                    </a>
                </li>
                @else
                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('pilihgejala')}}">
                        <i class="uil-bing"></i>
                        <span>Pilih Gejala</span>
                    </a>
                </li>
                @endif
                    <a href="{{url('detailpasien')}}">
                        <i class="uil-bing"></i>
                        <span>Detail Pasien</span>
                    </a>
                </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('cf')}}">
                        <i class="uil-bing"></i>
                        <span>CF</span>
                    </a>
                </li>

                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('cbr')}}">
                        <i class="uil-bing"></i>
                        <span>CBR</span>
                    </a>
                </li>
            </ul>
        </div>
            
        
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->