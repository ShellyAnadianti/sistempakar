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
                
                <li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('pilihgejala')}}">
                        <i class="uil-bing"></i>
                        <span>Pilih Gejala</span>
                    </a>
                </li><li>
                    {{-- <a href="{{url('index')}}"> --}}
                    <a href="{{url('addsaran')}}">
                        <i class="uil-bing"></i>
                        <span>Kirim Saran</span>
                    </a>
                </li>
                  

            </ul>
        </div>
            
        
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->